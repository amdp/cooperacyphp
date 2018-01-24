<?php

namespace App\Functions; 
use DB;

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
}