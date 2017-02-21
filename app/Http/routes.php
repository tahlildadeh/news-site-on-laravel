<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');

 Route::get('/news/{url}','HomeController@news');

 // Admin Route
 Route::group(['prefix'=>'admin', 'namespace' => 'Admin', /*'middleware' => 'auth'*/], function(){
     Route::resource('news', 'NewsController');
 });

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('nationalcode','NationalCodeController');
