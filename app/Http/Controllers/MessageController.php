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
      
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'max:80',
      'message' => 'max:1000',
    ]);

    if ($validator->fails()) {    
      $success = false;
      $mailSent = false;
      $data = $validator->messages()->first();
    } else {
      
      $toview = $request->toArray();
      
      /*SEND MAIL*/
    Mail::send('emails.contact', ['content'=>$request->message, 'name'=>$request->name, 'email'=>$request->email], function($message) use ($request){
    
            
            $message->to('cooperacy@cooperacy.org')
            ->from($request->email, $request->name)
            ->subject($request->subject);
            
    
    });
      
      $success = true;
      $mailSent = true;
      $data = 'Thank you for your message. We will reply as soon as possible.';
    }  
        
 
     return Response::json(array(
                    'success' => $success,
                    'mailSent' => $mailSent,
                    'message'   => $data,
                )); 
      
    }
}