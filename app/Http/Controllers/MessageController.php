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
   
      return redirect()->route('contact')->with('data', $message); 
 
      
    }

    public function sendThanksMail($mail) {

      Mail::send('emails.welcome-paid', [], function($message) use($mail) {

          $message->to($mail)
          ->bcc('cooperacy@cooperacy.org','Cooperacy')
          ->from('cooperacy@cooperacy.org','Cooperacy')
          ->subject('Welcome to Cooperacy!');

      });

      return 'Message sent to: '.$mail;

    }
}