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
Route::get('blog/{slug}',
      ['as' => 'blog.post', 'uses' => 'BlogController@getPost'])
      ->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses' => 'BlogController@index', 'as' => 'blog.index']);
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/shoutouts','PagesController@shoutouts');
Route::resource('posts','PostController');
