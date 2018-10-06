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

		$email = Auth::user()->email;

		Mail::send('emails.welcome-paid', [], function($message) use($email) {

            $message->to($email)
            ->bcc('cooperacy@cooperacy.org','Cooperacy')
            ->from('cooperacy@cooperacy.org','Cooperacy')
            ->subject('Welcome to Cooperacy!');

        });

	}

}

class ProjectFunctions
{
   	// voteCount ($id_project, $voteCode)
	// USE: count total votes for a project
	// Parameters:
	// $id_project = project ID
	// $voteCode = vote codes (1=equivalence, 2=trust, 3=care, 4=joke, 5=commit, 6=ai, 7=bizarre)
	public static function voteCount ($id_project, $voteCode) {
	  return
	  DB::table('coo_vote_relations')
	  ->where('id_project',$id_project)
	  ->where('vote_valid', 1)
	  ->where('vote_value', $voteCode)
	  ->count();
	}

	// hasVoted ($userId, $id_project, $voteCode)
	// USE: counts if a user has clicked a specific votes for a certain project
	// Parameters:
	// $userId = user ID
	// $id_project = project ID
	// $voteCode = vote codes (1=equivalence, 2=trust, 3=care, 4=joke, 5=commit, 6=ai, 7=bizarre)
	public static function hasVoted ($userId, $id_project, $voteCode) {
      return
      DB::table('coo_vote_relations')
      ->where('id_project',$id_project)
      ->where('id_user', $userId)
      ->where('vote_valid', 1)
      ->where('vote_value', $voteCode)
      ->count();
    }

    public static function totalVoteCount ($id_project) {
      $totalVoteCount = array();

      for ($i=1; $i<8; $i++) {
        if($i!==6) {
          $totalVoteCount[$i] = ProjectFunctions::voteCount($id_project, $i);
        } else {
          $totalVoteCount[$i] = 0;
        }


      }

       return $totalVoteCount;
    }

      public static function totalHasVoted ($userID, $id_project) {
      $totalHasVoted = array();

      for ($i=1; $i<8; $i++) {
        if($i!==6) {
          $totalHasVoted[$i] = ProjectFunctions::hasVoted($userID, $id_project, $i);
        } else {
          $totalHasVoted[$i] = null;
        }


      }

       return $totalHasVoted;
    }

    // getComments ($parent, $order)
	// USE: returns comments for a specific project id
	// Parameters:
	// $parent = parent project ID
	// $order = order (string 'ASC' or 'DESC')
    public static function getComments($parent, $order) {
    return
    DB::table('coo_project')
          ->where('type_project',3)
          ->where('parent_project', $parent)
          ->join('users','users.id','=','coo_project.id_project_owner')
          ->orderBy('coo_project.date_project', $order)
          ->get(array('coo_project.*', 'users.name as UserName', 'users.id as UserID'));
    }

    // getPeople ($resource, $id_project)
	// USE: returns list of people involved in a project
	// Parameters:
	// $resource = string ('coordinator', 'expert', 'reporter')
	// $order = order (string 'ASC' or 'DESC')
    public static function getPeople($resource, $id_project) {

      return
      DB::table('coo_user_relations')
      ->join('users', 'users.id', '=', 'coo_user_relations.id_user')
      ->where('coo_user_relations.id_project',$id_project)
      ->where('coo_user_relations.relation_value',$resource)
      ->where('coo_user_relations.relation_valid',1)
      ->get(['id_user', 'name']);
    }

    // getHtmlLinks ($content)
	// USE: recognizes html links in a text and return text with anchors.
	// Parameters:
	// $content = string
    public static function getHtmlLinks($content) {
	    $url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
		return preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $content);
    }

     // isCoordinator($id)
      // USE: returns 'yes' if logged user is coordinating a project, otherwise returns null
      // Parameters: $id = project id
    public static function isCoordinator($id) {
      $coordinators = ProjectFunctions::getPeople('coordinator', $id);
      $iscoordinator = null;
      foreach ($coordinators as $coordinator) {
        if ($coordinator->id_user == Auth::user()->id) {
          $iscoordinator = 'yes';
        }
      }

      return $iscoordinator;

    }

    // getLocations($id)
    // USE: return array with project locations (Continent, State, City)
    // Parameters: $id = project id
    public static function getLocations ($id) {
      $location = DB::table('coo_project')->where('id_project', $id)->value('location_project');
      $locationcity = array();
      $locationstate = array();
      $locationcontinent = array();
      $places = array();
      //IS A City?
      if ($location >=260) {
        $cityloc = DB::table('coo_project')->where('id_project', $location)->first();
        $cities = DB::table('coo_project')->where('parent_project',$cityloc->parent_project)->get();
        foreach ($cities as $city) {
          if ($city->id_project == $location) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationcity[] = [
            'name'      => $city->title_project,
            'id'        => $city->id_project,
            'selected'  => $selected,
          ];
        }

        $stateloc = DB::table('coo_project')->where('id_project', $cityloc->parent_project)->first();
        $states = DB::table('coo_project')->where('parent_project', $stateloc->parent_project)->get();
        foreach ($states as $state) {
          if ($state->id_project == $stateloc->id_project) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationstate[] = [
            'name'      => $state->title_project,
            'id'        => $state->id_project,
            'selected'  => $selected,
          ];
        }

        $continentloc = DB::table('coo_project')->where('id_project', $stateloc->parent_project)->first();
        $continents = DB::table('coo_project')->where('parent_project', $continentloc->parent_project)->get();
        foreach ($continents as $continent) {
          if ($continent->id_project == $continentloc->id_project) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationcontinent[] = [
            'name'      => $continent->title_project,
            'id'        => $continent->id_project,
            'selected'  => $selected,
          ];
        }
      }

      //IS A State?
      if ($location >=10 && $location<260) {
        $stateloc = DB::table('coo_project')->where('id_project', $location)->first();
        $states = DB::table('coo_project')->where('parent_project', $stateloc->parent_project)->get();
        foreach ($states as $state) {
          if ($state->id_project == $stateloc->id_project) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationstate[] = [
            'name'      => $state->title_project,
            'id'        => $state->id_project,
            'selected'  => $selected,
          ];
        }

        $continentloc = DB::table('coo_project')->where('id_project', $stateloc->parent_project)->first();
        $continents = DB::table('coo_project')->where('parent_project', $continentloc->parent_project)->get();
        foreach ($continents as $continent) {
          if ($continent->id_project == $continentloc->id_project) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationcontinent[] = [
            'name'      => $continent->title_project,
            'id'        => $continent->id_project,
            'selected'  => $selected,
          ];
        }
      }

      //IS A Continent?
      if ($location >=2 && $location <=9 ) {
        $continentloc = DB::table('coo_project')->where('id_project', $location)->first();
        $continents = DB::table('coo_project')->where('parent_project', $continentloc->parent_project)->get();
        foreach ($continents as $continent) {
          if ($continent->id_project == $continentloc->id_project) {
            $selected = 'yes';
          } else {
            $selected = 'no';
          }
          $locationcontinent[] = [
            'name'      => $continent->title_project,
            'id'        => $continent->id_project,
            'selected'  => $selected,
          ];
        }
      }

      $places = [
        'city'        => $locationcity,
        'state'       => $locationstate,
        'continent'   => $locationcontinent,
      ];


      return $places;

    }
}
