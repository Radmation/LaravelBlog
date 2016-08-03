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
// THE ROUTE SHOULD ALWAYS PASS A REQUEST TO A CONTROLLER

Route::get('/', 'PagesController@getindex');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact','PagesController@getContact');

// RESOURCE - posts/...
Route::resource('posts', 'PostController');

