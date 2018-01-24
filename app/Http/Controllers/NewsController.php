<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    
    public function index() {
        $posts = \App\Posts::where('status', 'pubblicata')->orderBy('data', 'DESC')->get();
        return view('pages.news', compact('posts'));
    }
    
    public function read() {
       
        return view('auth.newsadmin');

    }
  
    public function readsingle($id){

      //Read single post	
      $post = \App\Posts::where('id', $id)->first();

      return view('auth.newssingle', compact('post'));
    }
  
    public function manage() {

        $posts = \App\Posts::all();
        
        return view('auth.newsmanage', compact('posts'));

    }
    
    public function save(Request $request) {

    		$this->validate($request, [
    		'titolo' => 'required',
    		'autore' => 'required',
    		'data' => 'required',
    		'content' => 'required',
        'img' => 'nullable|max:500|mimetypes:image/jpeg,image/png',
        ]);

        $content = $request->content;

        $time = strtotime($request->data);
        $date= date('Y-m-d',$time);
        
        if(!empty($request->img)) {
            $file = $request->file('img');
            $ext = $request->file('img')->extension();
            
            if ($ext!=='png') {
              $extension = '.jpg';
            } else {
              $extension = '.png';
            }
                        
            $filename = uniqid().$extension;
            $destinationPath = public_path('images/news');
            $file->move($destinationPath,$filename);
        } else {
        //If request empty 
            $filename = 'NO';
        }
                    
    		$post = new \App\Posts;
    		$post->title = $request->titolo;
    		$post->author = $request->autore;
    		$post->data = $date;
        $post->img = $filename;
    		$post->content = $content;
    		$post->status = $request->status;
    		$post->save();

        if ($post->status !== 'bozza') {
          $message = "Newsletter pubblicata con successo";
        } else {
        $message = "Newsletter salvata come bozza";
        }

    	return redirect()->route('newsadmin')->with('data', $message);
    }

    public function readupdate($id) {

      $post = \App\Posts::where('id', $id)->first();
      $newdata = date("d-m-Y", strtotime($post->data));

      return view('auth.updatenews', compact('post', 'newdata'));
    }
    
    public function update(Request $request) {
      
      $this->validate($request, [
    		'titolo' => 'required',
    		'autore' => 'required',
    		'data' => 'required',
    		'content' => 'required',
        'img' => 'nullable|max:500|mimetypes:image/jpeg,image/png',
        ]);

        $time = strtotime($request->data);
        $date= date('Y-m-d',$time);

        if(!empty($request->img)) {
            $file = $request->file('img');
            $ext = $request->file('img')->extension();
            
            if ($ext!=='png') {
              $extension = '.jpg';
            } else {
              $extension = '.png';
            }
                        
            $filename = uniqid().$extension;
            $destinationPath = public_path('images/news');
            $file->move($destinationPath,$filename);
            
            $post = \App\Posts::where('id', $request->id)->first();
            $post->title = $request->titolo;
            $post->author = $request->autore;
            $post->data = $date;
            $post->status=$request->status;
            $post->img=$filename;
            $post->content=$request->content;
            $post->save();
        
        } else {
        //If request empty 
            $post = \App\Posts::where('id', $request->id)->first();
            $post->title = $request->titolo;
            $post->author = $request->autore;
            $post->data = $date;
            $post->status=$request->status;
            $post->content=$request->content;
            $post->save();
        }

		return redirect()->route('updatenews', ['id' => $post->id])->with('data', 'Newsletter aggiornata');
      
    }
    
    public function setStatus ($id, $value) {

    	$post = \App\Posts::where('id', $id)->first();
    	$post->status = $value;
    	$post->save();

    	if ($post->status !== 'bozza') {
        $message = "Newsletter pubblicata con successo";
      } else {
        $message = "Newsletter spostata in bozza";
      }

    	return redirect()->route('newsmanage')->with('data', $message);
    }

    public function delete(Request $request) {
    	
    	$post = \App\Posts::where('id', $request->id)->first();
    	$post->delete();

    	return redirect()->route('newsmanage')->with('data', 'Newsletter cancellata dal database');

    }
    
}
