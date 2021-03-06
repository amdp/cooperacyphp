<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Image;
use App\Functions\Functions;

class ProjectController extends Controller
{

  public function index() {
    $queries = DB::table('coo_project')
      ->where('stage_project',7)
      ->get();

      $projectsarray = array();
      $userID = Auth::user()->id;

      $labelDescription = [
            'Click if you like this project',
            'Click if you have faith in this project',
            'Click if you are in love with this project',
            'Click if you thik this comment is not so serious...',
            'Click if you would like to participate to this project',
            'This value will be automatically generated by our Artificial Intelligence',
            'Click if you think this project is creative or out of the box'
      ];

      foreach($queries as $query) {

          $totalVoteCount = Functions::totalVoteCount($query->id_project);

          // Check if already voted
          $totalVoted = Functions::totalHasVoted($userID, $query->id_project);

          // Check if logged user is coordinator
          $iscoordinator = Functions::isCoordinator($query->id_project);

        $projectarray[] = [
          'id_project' => $query->id_project,
          'coordinator' => $iscoordinator,
          'title_project' => $query->title_project,
          'img_project' => $query->img_project,
          'content_project' => $query->content_project,
          'totalVotes' => $totalVoteCount,
          'hasVoted' => $totalVoted,
          'labelDescription' => $labelDescription,
        ];

      }


      $projects = collect($projectarray);
      return view('auth.project-list', compact('projects'));
  }


  public function single($id) {

    $userID = Auth::user()->id;
    //GET PROJECT INFO
    $project = DB::table('coo_project')
      ->where('id_project', $id)
      ->first();

    $projectDescription = Functions::getHtmlLinks($project->content_project);

    $labelDescription = [
            'Click if you like this project',
            'Click if you have faith in this project',
            'Click if you are in love with this project',
            'Click if you thik this comment is not so serious...',
            'Click if you would like to participate to this project',
            'This value will be automatically generated by our Artificial Intelligence',
            'Click if you think this project is creative or out of the box'
     ];



    // GET PARENT INFO

    $parent_project = DB::table('coo_project')
      ->where('id_project', $project->parent_project)
      ->first();

    // GET CATEGORY
    $category = DB::table('coo_category')
      ->where('id_category', $project->category_project)
      ->first();

    //GET PEOPLE
    $creator = DB::table('users')
      ->where('id', $project->id_project_owner)
      ->first();

    $coordinators = Functions::getPeople('coordinator', $id);
    $experts = Functions::getPeople('expert', $id);
    $reporters = Functions::getPeople('reporter', $id);

    // IS USER COORDINATOR?
    $iscoordinator = Functions::isCoordinator($id);

    //VOTE COUNT
    $totalVoteCount = Functions::totalVoteCount($id);

    // ALREADY VOTED?
    $hasVoted = Functions::totalHasVoted($userID, $id);

    $projectinfo = [
      'id_project' => $project->id_project,
      'labelDescription' => $labelDescription,
      'hasVoted' => $hasVoted,
      'totalVotes' => $totalVoteCount,
    ];

    //**** GET COMMENTS ******
   $comments=array();

   $labelDescriptionComments = [
      'Click if you like this comment',
      'Click if you trust the author of this comment',
      'Click if you are in love with this comment',
      'Click if you thik this comment is not so serious...',
      'Click if you are ready to commit with this comment',
      'This value will be automatically generated by our Artificial Intelligence',
      'Click if you think this comment is smart, creative or out of the box'
   ];

   $commentsL1 = Functions::getComments($id,'DESC');

    foreach ($commentsL1 as $commentL1) {
        $subcomments = Functions::getComments($commentL1->id_project,'ASC');

        $commentsL2=array();
        foreach ($subcomments as $subcomment) {

          $subsubcomments = Functions::getComments($subcomment->id_project,'ASC');

            $commentsL3=array();
            foreach ($subsubcomments as $subsubcomment) {

              $commentsL3[] = [
                'id_project' => $subsubcomment->id_project,
                'author_id' => $subsubcomment->UserID,
                'author_name' => $subsubcomment->UserName,
                'content' => Functions::getHtmlLinks($subsubcomment->content_project),
                'editcontent' => $subsubcomment->content_project,
                'date' => $subsubcomment->date_project,
                'totalVotes' => Functions::totalVoteCount($subsubcomment->id_project),
                'hasVoted' => Functions::totalHasVoted($userID, $subsubcomment->id_project),
                'labelDescription' => $labelDescriptionComments,
              ];

            }

          $commentsL2[] = [
            'id_project' => $subcomment->id_project,
            'author_id' => $subcomment->UserID,
            'author_name' => $subcomment->UserName,
            'content' => Functions::getHtmlLinks($subcomment->content_project),
            'editcontent' => $subcomment->content_project,
            'date' => $subcomment->date_project,
            'replies' => $commentsL3,
            'totalVotes' => Functions::totalVoteCount($subcomment->id_project),
            'hasVoted' => Functions::totalHasVoted($userID, $subcomment->id_project),
            'labelDescription' => $labelDescriptionComments,

          ];
        }


        $comments[] = [
          'id_project' => $commentL1->id_project,
          'author_id' => $commentL1->UserID,
          'author_name' => $commentL1->UserName,
          'content' => Functions::getHtmlLinks($commentL1->content_project),
          'editcontent' => $commentL1->content_project,
          'date' => $commentL1->date_project,
          'replies' => $commentsL2,
          'totalVotes' => Functions::totalVoteCount($commentL1->id_project),
          'hasVoted' => Functions::totalHasVoted($userID, $commentL1->id_project),
          'labelDescription' => $labelDescriptionComments,
        ];

    }


    //GET LOCATIONS
    $locations = array();

    $child_location = DB::table('coo_project')
      ->where('id_project', $project->location_project)
      ->first();

    $locations[] = [
      'location_id' => $child_location->id_project,
      'location_name' => $child_location->title_project
    ];

    $parent_location1 = DB::table('coo_project')
      ->where('id_project', $child_location->parent_project)
      ->first();

    if (!empty($parent_location1)) {
        $locations[] = [
          'location_id' => $parent_location1->id_project,
          'location_name' => $parent_location1->title_project
          ];

        $parent_location2 = DB::table('coo_project')
          ->where('id_project', $parent_location1->parent_project)
          ->first();

          if (!empty($parent_location2)) {
            $locations[] = [
              'location_id' => $parent_location2->id_project,
              'location_name' => $parent_location2->title_project
              ];

           $parent_location3 = DB::table('coo_project')
            ->where('id_project', $parent_location2->parent_project)
            ->first();

             if (!empty($parent_location3)) {
               $locations[] = [
                'location_id' => $parent_location3->id_project,
                'location_name' => $parent_location3->title_project
                ];
             }
          }
    }

    $locations = array_reverse($locations);
    $places = collect($locations);
    //return $comments;
    return view('auth.single-project', compact('project', 'projectinfo', 'projectDescription', 'places', 'parent_project', 'creator', 'coordinators', 'experts', 'reporters', 'category', 'totalVoteCount', 'hasVoted', 'comments', 'iscoordinator'));
  }


  public function read() {

    $world = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', null)
      ->first();

    $continents = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 270)
      ->orderBy('title_project')
      ->get();

    $states = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 2)
      ->orderBy('title_project')
      ->get();

    $cities = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 10)
      ->orderBy('title_project')
      ->get();

    $categories = DB::table('coo_category')->get();
    $projects = DB::table('coo_project')->where('stage_project',7)->whereNotIn('id_project',[272])->get();

    //return $projects;

   return view('auth.new-project', compact('world', 'continents', 'states', 'cities', 'categories', 'projects'));

  }

  public function save(Request $request) {
    $this->validate($request, [
    'title_project' => 'required',
    'content_project' => 'required',
    'img_project' => 'mimetypes:image/jpeg,image/png',
    'budget_project' => 'required_if:zero_budget_project,==,0',
    ]);


    $arr=array();
    $arr = $request->all();

    $coordinators = array();
    $experts = array();
    $reporters = array();

    //Extract coordinators, experts, reporters
    foreach ($arr as $key => $value) {
      // echo $key.' '.$value.'<br>';
        if (substr( $key, 0, 11 ) === "coordinator"){
          $coordinators[]=$value;
        }
        if (substr( $key, 0, 6 ) === "expert"){
          $experts[]=$value;
        }
        if (substr( $key, 0, 8 ) === "reporter"){
          $reporters[]=$value;
        }

    }

    //Insert new city and get id if present
    if ($request->LocationID === "new-city"){
      $LocationID = DB::table('coo_project')->insertGetId([
        'parent_project' => $request->ParentLocationID,
        'id_project_owner' => 11,
        'title_project' => $request->new_city_name,
        'category_project' => 5
      ]);
    } else {
      $LocationID = $request->LocationID;
    }

    //Save image

    if(!empty($request->file('img_project'))) {

    $extension = '.jpg';
    $filename = uniqid().$extension;
    $destinationPath = public_path('images/projects');
    $pathToImage = $destinationPath.'/'.$filename;

    Image::configure(array('driver' => 'gd'));

    $image = Image::make($request->file('img_project')->getRealPath());
    $image->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
    })
    ->encode('jpg');

    $image->save($pathToImage);

    } else {
      $filename = "no-image";
    }
    // Save Project

    $projectID = DB::table('coo_project')->insertGetId([
      'parent_project' => $request->parent_project,
      'location_project' => $LocationID,
      'id_project_owner' => $request->id_project_owner,
      'title_project' => $request->title_project,
      'content_project' => $request->content_project,
      'img_project' => $filename,
      'stage_project' => $request->stage_project,
      'budget_project' => $request->budget_project,
      'hudget_project' => $request->hudget_project,
      'zero_budget_project' => $request->zero_budget_project,
      'category_project' => $request->category_project
    ]);



    //Save coordinators, experts, reporters
     foreach ($coordinators as $coordinator){
      DB::table('coo_user_relations')->insert([
        'id_project' => $projectID,
        'id_user' => $coordinator,
        'relation_value' => 'coordinator'
      ]);
     }
    foreach ($experts as $expert){
      DB::table('coo_user_relations')->insert([
        'id_project' => $projectID,
        'id_user' => $expert,
        'relation_value' => 'expert'
      ]);
     }
     foreach ($reporters as $reporter){
      DB::table('coo_user_relations')->insert([
        'id_project' => $projectID,
        'id_user' => $reporter,
        'relation_value' => 'reporter'
      ]);
     }

    $notify = Functions::notifyAll($projectID, $request->title_project);

    $message = "Project successfully submitted";
    return redirect()->route('new-project')->with('data', $message);
  }

  public function edit($id) {

    //If not coordinator kick out
    if (!Functions::isCoordinator($id)) {
      return back();
    }

    $world = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', null)
      ->first();

    $continents = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 1)
      ->orderBy('title_project')
      ->get();

    $states = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 2)
      ->orderBy('title_project')
      ->get();

    $cities = DB::table('coo_project')
      ->where('category_project', 5)
      ->where('parent_project', 10)
      ->orderBy('title_project')
      ->get();

    $experts = Functions::getPeople('expert', $id);
    $coordinators = Functions::getPeople('coordinator', $id);
    $reporters = Functions::getPeople('reporter', $id);
    $categories = DB::table('coo_category')->get();
    $projects = DB::table('coo_project')->where('stage_project',7)->whereNotIn('id_project',[272])->get();
    $locations = Functions::getLocations($id);
    $project = DB::table('coo_project')->where('stage_project',7)->where('id_project',$id)->first();
    return view('auth.edit-project', compact('id', 'world', 'experts', 'reporters', 'coordinators', 'continents', 'states', 'cities', 'categories', 'project', 'projects', 'locations'));
  }

  public function updateproject(Request $request) {
    $this->validate($request, [
    'title_project' => 'required',
    'content_project' => 'required',
    'img_project' => 'mimetypes:image/jpeg,image/png',
    //'budget_project' => 'required_if:zero_budget_project,==,0',
    ]);

    //Insert new city and get id if present
    if ($request->LocationID === "new-city"){
      $LocationID = DB::table('coo_project')->insertGetId([
        'parent_project' => $request->ParentLocationID,
        'id_project_owner' => 11,
        'title_project' => $request->new_city_name,
        'category_project' => 5
      ]);
    } else {
      $LocationID = $request->LocationID;
    }

    //Save image

    if(!empty($request->file('img_project'))) {

    $extension = '.jpg';
    $filename = uniqid().$extension;
    $destinationPath = public_path('images/projects');
    $pathToImage = $destinationPath.'/'.$filename;

    Image::configure(array('driver' => 'gd'));

    $image = Image::make($request->file('img_project')->getRealPath());
    $image->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
    })
    ->encode('jpg');

    $image->save($pathToImage);

    } else if (!empty($request->loadedimage)) {
      $filename = $request->loadedimage;
    } else {
      $filename = "no-image";
    }

    //Update data
    DB::table('coo_project')->where('id_project', $request->project_id)
      ->update([
        'title_project'       => $request->title_project,
        'content_project'     => $request->content_project,
        'img_project'         => $filename,
        'location_project'    => $LocationID,
        'budget_project'      => $request->budget_project,
        'hudget_project'      => $request->hudget_project,
        'zero_budget_project' => $request->zero_budget_project,
        'category_project'    => $request->category_project,
        'parent_project'      => $request->parent_project,
      ]);

    $arr=array();
    $arr = $request->all();
    $coordinators = array();
    $experts = array();
    $reporters = array();

        //Extract coordinators, experts, reporters
    foreach ($arr as $key => $value) {
      // echo $key.' '.$value.'<br>';
        if (substr( $key, 0, 11 ) === "coordinator"){
          $coordinators[]=$value;
        }
        if (substr( $key, 0, 6 ) === "expert"){
          $experts[]=$value;
        }
        if (substr( $key, 0, 8 ) === "reporter"){
          $reporters[]=$value;
        }
    }

    //Delete old relations, save coordinators, experts, reporters
    if(!empty($coordinators)) {
            DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'coordinator')
            ->delete();

            foreach ($coordinators as $coordinator){
            DB::table('coo_user_relations')->insert([
              'id_project' => $request->project_id,
              'id_user' => $coordinator,
              'relation_value' => 'coordinator'
            ]);
           }
    } else {
      DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'coordinator')
            ->delete();
    }

    if(!empty($experts)) {
            DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'expert')
            ->delete();

            foreach ($experts as $expert){
            DB::table('coo_user_relations')->insert([
              'id_project' => $request->project_id,
              'id_user' => $expert,
              'relation_value' => 'expert'
            ]);
           }
    } else {
      DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'expert')
            ->delete();
    }

    if(!empty($reporters)) {
            DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'reporter')
            ->delete();

            foreach ($reporters as $reporter){
            DB::table('coo_user_relations')->insert([
              'id_project' => $request->project_id,
              'id_user' => $reporter,
              'relation_value' => 'reporter'
            ]);
           }
    } else {
      DB::table('coo_user_relations')
            ->where('id_project', $request->project_id)
            ->where('relation_value', 'reporter')
            ->delete();
    }

    $message = "Project successfully edited";
    return redirect('view-project/'.$request->project_id)->with('data', $message);
  }

  // AJAX QUERIES

  public function getContinents() {
    return DB::table('coo_project')
      ->where('stage_project', 7)
      ->where('parent_project', 1)
      ->orderBy('title_project')
      ->get();
  }

  public function getStates($continent) {

    $states = DB::table('coo_project')
      ->where('stage_project', 7)
      ->where('parent_project', $continent)
      ->orderBy('title_project')
      ->get();

    return $states;
  }

    public function getCities($state) {

    $cities = DB::table('coo_project')
      ->where('stage_project', 7)
      ->where('parent_project', $state)
      ->orderBy('title_project')
      ->get();

    return $cities;
  }

  public function getPerson() {
    $person = $_GET['term'];
    $queries = DB::table('users')
    ->where('name', 'like', '%'.$person.'%')
    ->where('member',1)
    ->orWhere('admin',1)
    ->get();

  $persons = array();
    foreach ($queries as $query) {
      $persons[] = [
        'id' => $query->id,
        'name' => $query->name
      ];
    }

    return $persons;
  }



}
