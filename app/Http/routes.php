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

Route::group(['before' => 'auth.basic'], function() {
  Route::get('/', function () {
      // return view('welcome');
      return redirect()->action('ArticleController@show', ['home']);
  });
  Route::get('/404', 'ArticleController@p404');
  Route::get('/{slug}', 'ArticleController@show');
});

Route::filter('auth.basic', function()
{
    return Auth::basic('email');
});
