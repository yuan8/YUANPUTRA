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


// use App\Events\ChatPusherEvent;

Route::get('/', 'indexController@index');
Route::get('/project/{id?}', 'indexController@view');

Auth::routes();

Route::get('/mes',function(){
	return view('pages.mes'); 
});

Route::get('/pusher', function() {
    event(new App\Events\HelloPusherEvent('Hi there Pusher!'));
    return "Event has been sent!";
});


Route::get('/home', 'HomeController@index');


