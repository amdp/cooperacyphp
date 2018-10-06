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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/diversity', function () {
    return view('pages.diversity');
});

Route::get('/care', function () {
    return view('pages.care');
});

Route::get('/equivalence', function () {
    return view('pages.equivalence');
});

Route::get('/freedom', function () {
    return view('pages.freedom');
});

Route::get('/transparency', function () {
    return view('pages.transparency');
});

Route::get('/trust', function () {
    return view('pages.trust');
});

Route::get('/understanding', function () {
    return view('pages.understanding');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/map', [
'as' => 'map',
'uses' => 'MapController@showCountries']);

Route::get('/testdb', 'Test@getData');

Route::post('sendmessage', [
    'as' => 'sendmessage',
    'uses' => 'MessageController@send',
]);

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/home', [
  'middleware' => ['member'],
  'uses' => 'HomeController@index']);

Route::get('/warning', [
  'as' => 'warning',
  'uses' => function () {
  return view('warning');
}]);

Route::get('/members', function () {
  return view('pages.protected');
});

Route::post('pool', [
    'as' => 'pool',
    'uses' => 'PaypalController@pool',
]);

Route::get('thanks', [
    'as' => 'thanks',
    'uses' => 'PaypalController@confirm']);

Route::get('check', [
'as' => 'check',
'uses' => 'PaypalController@getPaymentStatus']);

Route::get('checkplan', [
'as' => 'checkplan',
'uses' => 'PaypalController@getPlanList']);

Route::get('oops', [
    'as' => 'oops',
    'uses' => function () {
  return view('oops');
}]);

Route::get('ending', [
    'as' => 'ending',
    'uses' => function () {
  return view('ending');
}]);

Route::post('payment', [
    'as' => 'payment',
    'uses' => 'PaypalController@subscribe',
]);
