<?php
namespace App\Http\Controllers;
use Mail;
use App\Http\Controllers\Controller;

class TestMailController extends Controller
{
  public function testmail () {
        Mail::send('emails.welcome', [], function($message) {
            $message->to('cooperacy@cooperacy.org')
            ->from('cooperacy@cooperacy.org', 'Cooperacy')
            ->subject('Welcome to Cooperacy');
        });

  public function testmailpaid() {
    Mail::send('emails.welcome-paid', [], function($message) {
        $message->to('cooperacy@cooperacy.org','Cooperacy')
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('Test paid e-mail from Cooperacy');
    });
    return 'Test e-mail sent';
  }
}
}
