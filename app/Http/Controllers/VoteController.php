<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VoteController extends Controller
{
  
  public function updateVote(){
    
    $clickedOn = $_GET['command'];
    $userID = $_GET['uID'];
    $projectID = $_GET['pID'];
    $command = null;
    $label='';
    //Define commands
    switch ($clickedOn) {
      case 'vote-equivalence':
        $command=1;
        $label="label-equivalence";
        break;
      case 'vote-trust':
        $command=2;
        $label="label-trust";
        break;
      case 'vote-care':
        $command=3;
        $label="label-care";
        break;
      case 'vote-joke':
        $command=4;
        $label="label-joke";
        break;
      case 'vote-commit':
        $command=5;
        $label="label-commit";
        break;
      case 'vote-bizarre':
        $command=7;
        $label="label-bizarre";
        break;
    }
    
    //UPDATE IF EXISTS
    $voteExists = DB::table('coo_vote_relations')
      ->where('id_project',$projectID)
      ->where('id_user',$userID)
      ->where('vote_value',$command)
      ->where('vote_valid',1)
      ->get();
      
    if(!$voteExists->isEmpty()){
      $log = 'vote exists';
      DB::table('coo_vote_relations')
        ->where('id_project', $projectID)
        ->where('id_user', $userID)
        ->where('vote_value', $command)
        ->update(['vote_valid' => 0]);
    } else {
      $log = 'vote NOT exists';
      DB::table('coo_vote_relations')->insert([
        'id_project' => $projectID,
        'id_user' => $userID,
        'vote_value' => $command,
        'vote_valid' => 1
      ]);
    }
    
    
    $total = DB::table('coo_vote_relations')
      ->where('id_project',$projectID)
      ->where('vote_value',$command)
      ->where('vote_valid',1)
      ->count();
    
    
    
    
    $updateVote=array([
      'total' => $total,
      'label' => $label,
      'log' => $log,
      'projectID' => $projectID
    ]);
    
    
    
    
    return $updateVote;
    
  }
  
  
}