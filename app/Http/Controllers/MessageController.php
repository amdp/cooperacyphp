<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Validator;
use Mail;

class MessageController extends Controller
{
    public function send(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'max:80',
        'message' => 'max:1000',
        'g-recaptcha-response' => 'required|captcha',
        ]);


      $toview = $request->toArray();
      
      /*SEND MAIL*/
    Mail::send('emails.contact', ['content'=>$request->message, 'name'=>$request->name, 'email'=>$request->email], function($message) use ($request){
    
            
            $message->to('cooperacy@cooperacy.org')
            ->from($request->email, $request->name)
            ->subject($request->subject);
            
    
    });
      
      $success = true;
      $mailSent = true;
      $message = 'Thank you for your message. We will reply as soon as possible.';
   
      return view('pages.contact')->with('data', $message); 
 
      
    }
}