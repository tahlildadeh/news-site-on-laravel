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


Route::auth();

Route::any('test/mail/{to}/{subject}/{message?}', 'TestController@mail');


Route::group(['prefix' => 'news', 'as', 'news::'], function(){
   Route::get('/{id}/{title?}', ['as' => 'single', 'uses' => 'NewsController@show']);
});
