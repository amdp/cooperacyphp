<?php
namespace App\Functions; 

use DB;
use Auth;
use Mail;
use Illuminate\Support\Collection;
use App\Functions\ProjectFunctions;

class Functions
{

	public static function notifyComment($id, $commentid, $content) {
		$messages=array();
		$title = DB::table('coo_project')->where('id_project', $id)->value('title_project');
		$comments = ProjectFunctions::getComments($id,'DESC');
    	foreach ($comments as $comment) {
    		$subcomments = ProjectFunctions::getComments($comment->id_project,'ASC'); 
    		foreach ($subcomments as $subcomment) {
        	$subsubcomments = ProjectFunctions::getComments($subcomment->id_project,'ASC');  
      			foreach ($subsubcomments as $subsubcomment) {
	      			$messages[] = [
	      				'comment'	=>	$subsubcomment,
	      			];
	      		}

	      		$messages[] = [
	      			'comment'	=>	$subcomment,
	      		];
	      	}

	      	$messages[] = [
	      		'comment'	=>	$comment,
	      	];
	     }  

	    $emails = array();
	    
	    foreach ($messages as $message) {
	    	$emails[] = [
	    		'name'  => $message['comment']->UserName,
	    		'email'	=> DB::table('users')->where('id', $message['comment']->id_project_owner)->value('email')
	    	];

	    }

        $emails = array_map("unserialize", array_unique(array_map("serialize", $emails)));

        $mymail = Auth::user()->email;

        foreach ($emails as $key => $value){
		    if ($value['email'] == $mymail) {
		        unset($emails[$key]);
		    }
		}

        foreach ($emails as $email) {

			$data = array([
				'name' 		=>	$email['name'],
				'id'		=>	$id,
				'commentid'	=>	$commentid,
				'content'	=>	$content

			]);

			Mail::send('emails.commentnotify', ['data' => $data], function($message) use($email, $title) {
            $message->to($email['email'])
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('New Comment on: '.$title);
        	});

		}

		return $emails;



	}

	public static function notifyAll($id, $title) {

		$members = DB::table('users')
			->where('member',1)
			->where('transaction_state', 'Active')
			->select('name','email')->get();

		$oldmembers = DB::table('users')
			->where('member',1)
			->where('olduser',1)
			->select('name','email')->get();

		$admins = DB::table('users')
			->where('admin',1)
			->select('name','email')->get();
		
		$emails = ($members->merge($oldmembers))->merge($admins);

		foreach ($emails as $email) {

			$data = array([
				'name' 	=>	$email->name,
				'title'	=>	$title,
				'id'	=>	$id
			]);

			Mail::send('emails.projectnotify', ['name' => $data], function($message) use($email) {
            $message->to($email->email)
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('New Project Posted');
        	});

		}

		return $emails;

	}

	public static function notifyPayPalPayment() {
		$data = array([
			'email' => Auth::user()->email
		]);

		$email = Auth::user()->email;

		Mail::send('emails.paypalpayment', ['name' => $data], function($message) use($email) {
            $message->to('cooperacy@cooperacy.org')
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('Subscription confirmed from '.$email);
        	});

	}

	public static function thanksUser() {

		Mail::send('emails.welcome-paid', [], function($message) use($data) {
			
			$data = array([
				'email' => Auth::user()->email
			]);

            $message->to($data['email'])
            ->bcc('cooperacy@cooperacy.org','Cooperacy')
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('A warm welcome to Cooperacy');

        });

	} 

}