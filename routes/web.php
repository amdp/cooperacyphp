<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/******************************************
*********BEGIN PUBLIC ROUTES***************
*******************************************/

Route::get('/', ['as' => 'main', 'uses' => function () { return view('pages.home'); }]);
Route::get('/terms', ['as' => 'terms','uses' => function () {return view('pages.terms');}]);
Route::get('/research', ['as' => 'research','uses' => function () {return view('pages.research');}]);
Route::get('/cci', ['as' => 'cci','uses' => function () {return view('pages.cci');}]);
Route::get('/science', ['as' => 'science','uses' => function () {return view('pages.science');}]);
Route::get('/project-articles', ['as' => 'project-articles','uses' => function () {return view('pages.project-articles');}]);
Route::get('/research-streams', ['as' => 'research-streams','uses' => function () {return view('pages.research-streams');}]);
Route::get('/network', ['as' => 'network','uses' => function () {return view('pages.network');}]);
Route::get('/cooperation', function () {return view('pages.cooperation');});
Route::get('/proportions', function () {return view('pages.proportions');});
Route::get('/solutions', function () {return view('pages.solutions');});
Route::get('/contact', function () {return view('pages.contact');});
Route::get('/aboutus', function () {return view('pages.aboutus');});
Route::get('/howitworks', function () {return view('pages.howitworks');});
Route::get('/economy', function () {return view('pages.economy');});
Route::get('/governance', function () {return view('pages.governance');});
Route::get('/aboutyou', function () {return view('pages.aboutyou');});
Route::get('/stories', function () {return view('pages.stories');});
Route::get('fun', function () {return view('pages.fun');});
Route::get('/science', function () {return view('pages.science');});
Route::get('/platform', function () {return view('pages.platform');});
Route::get('/cohackathon', function () { return view('pages.cohackathon'); });
Route::get('/openecosystem', function () { return view('pages.openecosystem'); });
Route::get('/overview', function () { return view('pages.overview'); });
Route::get('/workshops', function () { return view('pages.workshops'); });
Route::get('/paradox', function () { return view('pages.paradox');});
Route::get('/coolearning', function () { return view('pages.coolearning');});
Route::get('/participate', function () { return view('pages.participate');});
Route::get('/chapters', function () { return view('pages.chapters');});
Route::get('/spread', function () { return view('pages.spread');});
Route::get('/participate', function () {return view('pages.participate');});
Route::get('/participate', [  'as' => 'participate',  'uses' => 'PublicController@membersnumber']);
Route::get('/news', [   'as' => 'news',  'uses' => 'NewsController@index']);

/*****************************************
******END PUBLIC ROUTES*******************
*****************************************/


/****************************************
*******BEGIN NEW SITE********************
*****************************************/

//NEW SITE
/*
Route::get('/home2', ['as' => 'home2','uses' => function () {return view('lvsite.lvhome');}]);

Route::get('/lvunderstanding', function () {return view('lvsite.lvunderstanding');});
*/
/****************************************
*******END NEW SITE**********************
*****************************************/

/****************************************
*******BEGIN PRIVATE ROUTES**************
*****************************************/

Route::get('/login', function () {return view('auth.login');});

Auth::routes();

Route::get('/home', [   'middleware' => ['member'],
  'uses' => 'HomeController@index']);

Route::get('/forbidden', [   'as' => 'forbidden',
  'uses' => function () {
  return view('forbidden');}]);

Route::get('/warning', [   'as' => 'warning',
  'uses' => function () {
  return view('warning');}]);

Route::get('/members', function () {
  return view('pages.protected');});

// NEWSLETTER ROUTES
Route::get('/newsmanage', [   'middleware' => ['auth', 'admin'],
  'as' => 'newsmanage',
  'uses' => 'NewsController@manage']);

Route::get('/newsadmin', [   'middleware' => ['auth', 'admin'],
  'as' => 'newsadmin',
  'uses' => 'NewsController@read']);

Route::post('/newsadmin', [   'middleware' => ['auth', 'admin'],
  'as' => 'newsadmin',
  'uses' => 'NewsController@save']);

Route::get('/newssingle/{id}', [   'middleware' => ['auth', 'admin'],
  'uses' => 'NewsController@readsingle']);

Route::get('/updatenews/{id?}', [   'middleware' => ['auth', 'admin'],
  'as' => 'updatenews',
  'uses' => 'NewsController@readupdate']);

Route::post('/updatenewsletter', [   'middleware' => ['auth', 'admin'],
  'as' => 'updatenewsletter',
  'uses' => 'NewsController@update']);

Route::get('/updatestatus/{id}/{value}', [   'middleware' => ['auth', 'admin'],
  'as' => 'updatestatus',
  'uses' => 'NewsController@setStatus']);

Route::post('/deletenewsletter', [   'middleware' => ['auth', 'admin'],
  'as' => 'deletenewsletter',
  'uses' => 'NewsController@delete']);


/******PROJECT ROUTES********/
Route::get('/new-project', [   'middleware' => ['auth', 'member'],
  'as' => 'new-project',
  'uses' => 'ProjectController@read']);

Route::post('/new-project', [   'middleware' => ['auth', 'member'],
  'as' => 'new-project',
  'uses' => 'ProjectController@save']);

Route::get('/projects-list', [   'middleware' => ['auth', 'member'],
  'as' => 'projects-list',
  'uses' => 'ProjectController@index']);

Route::get('/view-project/{id}/', [   'middleware' => ['auth', 'member'],
  'as' => 'view-project',
  'uses' => 'ProjectController@single']);

/*********COMMENT ROUTES***********/
Route::post('/new-comment', [   'middleware' => ['auth', 'member'],
  'as' => 'new-comment',
  'uses' => 'CommentController@save']);

Route::post('/reply-comment', [   'middleware' => ['auth', 'member'],
  'as' => 'reply-comment',
  'uses' => 'CommentController@reply']);

Route::post('/delete-comment', [   'middleware' => ['auth', 'member'],
  'as' => 'delete-comment',
  'uses' => 'CommentController@delete']);

Route::post('/modify-comment', [   'middleware' => ['auth', 'member'],
  'as' => 'modify-comment',
  'uses' => 'CommentController@modify']);

/******AJAX QUERIES*****/
Route::get('/get-states/{continent}', [   'middleware' => ['auth'],
  'as' => 'get-states',
  'uses' => 'ProjectController@getStates']);

Route::get('/get-cities/{state}', [   'middleware' => ['auth'],
  'as' => 'get-cities',
  'uses' => 'ProjectController@getCities']);

Route::get('/get-person/', [   'middleware' => ['auth'],
  'as' => 'get-person',
  'uses' => 'ProjectController@getPerson']);

Route::get('/get-expert/', [   'middleware' => ['auth'],
  'as' => 'get-expert',
  'uses' => 'ProjectController@getExpert']);

Route::get('/update-vote/', [   'middleware' => ['auth', 'member'],
  'as' => 'update-vote',
  'uses' => 'VoteController@updateVote']);

/****************************************
*******END PRIVATE ROUTES****************
*****************************************/

/**********************************
******BEGIN PAYPAL*****************
**********************************/

Route::get('/createplan', [   'middleware' => ['auth', 'admin'],
  'as' => 'createplan',
  'uses' => function() {  return view('createplan');}]);

Route::post('/createplan', [   'middleware' => ['auth', 'admin'],
  'as' => 'createplan',
  'uses' => 'PlanController@createplan']);

Route::get('pay', ['as' => 'pay','uses' => function () {  return view('pay');}]);

Route::post('pay', ['as' => 'pay','uses' => 'PlanController@pay',
]);

Route::get('thanks', ['as' => 'thanks','uses' => 'PlanController@confirm']);

Route::get('check', [ 'as' => 'check',
'uses' => 'PaypalController@getPaymentStatus']);

Route::get('checkplan', [ 'as' => 'checkplan',
'uses' => 'PaypalController@getPlanList']);

Route::get('oops', ['as' => 'oops','uses' => function () {
  return view('oops');}]);

Route::get('ending', ['as' => 'ending','uses' => function () {
  return view('ending');}]);

Route::post('payment', ['as' => 'payment','uses' => 'PaypalController@subscribe',
]);

/**********************************
******END PAYPAL*****************
**********************************/




















/********************************************
****EXPERIMENTAL OR TESTING ROUTES***********
********************************************/

Route::get('/dummy-list', [   'middleware' => ['auth', 'member'],
  'as' => 'dummy-list',
  'uses' => 'ProjectController@dummyindex']);

  Route::get('/dummy-project/{id}/', [   'middleware' => ['auth', 'member'],
  'as' => 'dummy-project',
  'uses' => 'ProjectController@dummysingle']);

 // Route::get('/registersec', function () {// return view('auth.register-ok');// });

// Route::get('/howitworks2', function () {
//     return view('pages.howitworks2');// });

Route::get('/test', function () {return view('duplicates-and-or-working-pages-do-not-delete.test');});

Route::get('wp-admin/admin-ajax.php', [ 'as' => 'IPNCheck',
'uses' => 'IPNController@logmessage']);

Route::post('wp-admin/admin-ajax.php', [ 'as' => 'IPNCheck',
'uses' => 'IPNController@logmessage']);

Route::get('/map', [ 'as' => 'map',
'uses' => 'MapController@showCountries']);

Route::post('sendmessage', ['as' => 'sendmessage','uses' => 'MessageController@send',
]);

Route::get('testmail', ['as' => 'testmail','uses' => 'TestMailController@test',
]);

//Route::get('/home', 'HomeController@index');
// Route::get('/updatepass', [ //   'as' => 'updatepass',
//   'uses' => 'PlanController@updatepass']);
// Route::get('/home', [ //   'as' => 'home',
//   'uses' => function () {
//   return view('home');
// }]);
