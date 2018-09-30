<?php

namespace App\Http\Controllers;

use Mail;

use App\Http\Controllers\Controller;


class TestMailController extends Controller
{

public function test () {

        Mail::send('emails.welcome', [], function($message) {
    
            
            $message->to('enea.barbetta@gmail.com')
            ->from('cooperacy@cooperacy.org', 'Cooperacy')
            ->subject('Welcome to Cooperacy');
            
    
        });
}

public function testpaid () {

    Mail::send('emails.welcome-paid', [], function($message) {

        
        $message->to('enea.barbetta@gmail.com')
        ->from('cooperacy@cooperacy.org', 'Cooperacy')
        ->subject('Welcome to Cooperacy');
        

    });
}

}