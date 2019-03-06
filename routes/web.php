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
Route::get('/contact', ['as' => 'contact', 'uses' => function () {return view('pages.contact'); }]);

Route::get('/aboutyou', function () {return view('pages.aboutyou');});
Route::get('/newtest', function () {return view('pages.newtest');});
Route::get('/aboutus', function () {return view('pages.aboutus');});
Route::get('/platform', function () {return view('pages.platform');});
Route::get('/whitepaper', function () {return view('pages.whitepaper');});
Route::get('/news', [   'as' => 'news',  'uses' => 'NewsController@index']);

Route::get('/cooperation', function () {return view('pages.cooperation');});
Route::get('/integration', function () {return view('pages.integration');});
Route::get('/solutions', function () {return view('pages.solutions');});
Route::get('/governance', function () {return view('pages.governance');});
Route::get('/memberlist', function () {return view('pages.memberlist');});

Route::get('/participate', function () {return view('pages.participate');});
Route::get('/participate', [  'as' => 'participate',  'uses' => 'PublicController@membersnumber']);
Route::get('/journey', function () { return view('pages.journey'); });
Route::get('fun', function () {return view('pages.fun');});
Route::get('/spread', function () { return view('pages.spread');});

Route::get('/coorporate', function () { return view('pages.coorporate');});
Route::get('/cohackathon', function () { return view('pages.cohackathon'); });
Route::get('/openecosystem', function () { return view('pages.openecosystem'); });
Route::get('/overview', function () { return view('pages.overview'); });
Route::get('/workshops', function () { return view('pages.workshops'); });

Route::get('/science', ['as' => 'science','uses' => function () {return view('pages.science');}]);
Route::get('/coscience', function () {return view('pages.coscience');});
Route::get('/cci', ['as' => 'cci','uses' => function () {return view('pages.cci');}]);
Route::get('/articles', ['as' => 'articles','uses' => function () {return view('pages.articles');}]);
Route::get('/streams', ['as' => 'streams','uses' => function () {return view('pages.streams');}]);
Route::get('/network', ['as' => 'network','uses' => function () {return view('pages.network');}]);

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

Route::group(['middleware' => ['permission:user-permissions']], function () {

Route::get('/home', ['uses' => 'HomeController@index']);

});

Route::get('/forbidden', [   'as' => 'forbidden',
  'uses' => function () {
  return view('forbidden');}]);

Route::get('/warning', [   'as' => 'warning',
  'uses' => function () {
  return view('warning');}]);

Route::get('/members', function () {
  return view('pages.protected');});


// NEWSLETTER ROUTES
Route::group(['middleware' => ['permission:admin-permissions']], function () {

  Route::get('/newsmanage',
    ['as' => 'newsmanage',
    'uses' => 'NewsController@manage']);

  Route::get('/newsadmin',
    ['as' => 'newsadmin',
    'uses' => 'NewsController@read']);

  Route::post('/newsadmin',
    ['as' => 'newsadmin',
    'uses' => 'NewsController@save']);

  Route::get('/newssingle/{id}',
    ['uses' => 'NewsController@readsingle']);

  Route::get('/updatenews/{id?}',
    ['as' => 'updatenews',
    'uses' => 'NewsController@readupdate']);

  Route::post('/updatenewsletter',
    ['as' => 'updatenewsletter',
    'uses' => 'NewsController@update']);

  Route::get('/updatestatus/{id}/{value}',
    ['as' => 'updatestatus',
    'uses' => 'NewsController@setStatus']);

  Route::post('/deletenewsletter',
    ['as' => 'deletenewsletter',
    'uses' => 'NewsController@delete']);
});



/******PROJECT ROUTES********/
Route::group(['middleware' => ['permission:user-permissions']], function () {

Route::get('/new-project', [ 'as' => 'new-project',
  'uses' => 'ProjectController@read']);

Route::post('/new-project', [ 'as' => 'new-project',
  'uses' => 'ProjectController@save']);

Route::get('/projects-list', [ 'as' => 'projects-list',
  'uses' => 'ProjectController@index']);

Route::get('/view-project/{id}/', [ 'as' => 'view-project',
  'uses' => 'ProjectController@single']);

Route::get('/edit-project/{id}/', [ 'as' => 'edit-project',
  'uses' => 'ProjectController@edit']);

Route::post('/edit-project', [ 'as' => 'edit-project',
  'uses' => 'ProjectController@updateproject']);

});

/*********COMMENT ROUTES***********/
Route::group(['middleware' => ['permission:user-permissions']], function () {

Route::post('/new-comment', [ 'as' => 'new-comment',
  'uses' => 'CommentController@save']);

Route::post('/reply-comment', [ 'as' => 'reply-comment',
  'uses' => 'CommentController@reply']);

Route::post('/delete-comment', [ 'as' => 'delete-comment',
  'uses' => 'CommentController@delete']);

Route::post('/modify-comment', [ 'as' => 'modify-comment',
  'uses' => 'CommentController@modify']);

});
/******AJAX QUERIES*****/
Route::get('/get-states/{continent}', [   'middleware' => ['auth'],
  'as' => 'get-states',
  'uses' => 'ProjectController@getStates']);

Route::get('/get-cities/{state}', [   'middleware' => ['auth'],
  'as' => 'get-cities',
  'uses' => 'ProjectController@getCities']);

Route::get('/get-continents', [
  'middleware' => ['auth'],
  'as' => 'get-continents',
  'uses' => 'ProjectController@getContinents']);

Route::get('/get-person/', [ 'middleware' => ['auth'],
  'as' => 'get-person',
  'uses' => 'ProjectController@getPerson']);

Route::get('/get-expert/', [ 'middleware' => ['auth'],
  'as' => 'get-expert',
  'uses' => 'ProjectController@getExpert']);

Route::group(['middleware' => ['permission:user-permissions']], function () {

  Route::get('/update-vote/', [ 'as' => 'update-vote',
    'uses' => 'VoteController@updateVote']);

  });

/****************************************
*******END PRIVATE ROUTES****************
*****************************************/

/**********************************
******BEGIN PAYPAL*****************
**********************************/
Route::group(['middleware' => ['permission:admin-permissions']], function () {

  Route::get('/createplan', [ 'as' => 'createplan',
    'uses' => function() {  return view('createplan');}]);

  Route::post('/createplan', [ 'as' => 'createplan',
    'uses' => 'PlanController@createplan']);

  });

Route::get('pool', ['as' => 'pool','uses' => function () {  return view('pool');}]);

Route::post('pool', ['as' => 'pool','uses' => 'PlanController@pool',
]);

Route::get('paypalpay', ['as' => 'paypalpay','uses' => 'PlanController@pool',
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

Route::group(['middleware' => ['permission:user-permissions']], function () {

Route::get('/dummy-list', [
  'as' => 'dummy-list',
  'uses' => 'ProjectController@dummyindex']);

  Route::get('/dummy-project/{id}/', [
  'as' => 'dummy-project',
  'uses' => 'ProjectController@dummysingle']);

});
 // Route::get('/registersec', function () {// return view('auth.register-ok');// });

Route::get('/test', function () {return view('duplicates-and-or-working-pages-do-not-delete.test');});

Route::get('wp-admin/admin-ajax.php', [ 'as' => 'IPNCheck',
'uses' => 'IPNController@logmessage']);

Route::post('wp-admin/admin-ajax.php', [ 'as' => 'IPNCheck',
'uses' => 'IPNController@logmessage']);

Route::get('/map', [ 'as' => 'map',
'uses' => 'MapController@showCountries']);

Route::post('sendmessage', ['as' => 'sendmessage','uses' => 'MessageController@send',
]);

Route::group(['middleware' => ['permission:admin-permissions']], function () {

Route::get('/testmail', [ 'as' => 'testmail',
  'uses' => 'TestMailController@testmail']);

Route::get('/testmailpaid', [ 'as' => 'testmailpaid',
  'uses' => 'TestMailController@testmailpaid']);

Route::get('/send-thanks-mail/{email}', [ 'as' => 'send-thanks-mail',
  'uses' => 'MessageController@sendThanksMail']);

});
//Route::get('/home', 'HomeController@index');
// Route::get('/updatepass', [ //   'as' => 'updatepass',
//   'uses' => 'PlanController@updatepass']);
// Route::get('/home', [ //   'as' => 'home',
//   'uses' => function () {
//   return view('home');
// }]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
