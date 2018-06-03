<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Auth
Route::post('/users/login', 'UserController@login');
Route::post('/users', 'UserController@create');
Route::get('/user', 'UserController@show');
Route::put('/user', 'UserController@update');

// Articles
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/feed', 'ArticleController@feed');
Route::get('/articles/{slug}', 'ArticleController@show');
Route::post('/articles', 'ArticleController@create');
Route::delete('/articles/{slug}', 'ArticleController@destroy');
Route::put('/articles/{slug}', 'ArticleController@update');
Route::post('/articles/{slug}/favorite', 'ArticleController@favorite');
Route::delete('/articles/{slug}/favorite', 'ArticleController@unfavorite');

// Comments
Route::get('/articles/{slug}/comments', 'ArticleController@getComments');
Route::post('/articles/{slug}/comments', 'ArticleController@createComment');
Route::delete('/articles/{slug}/comments/{id}', 'ArticleController@deleteComment');

// Profiles
Route::get('/profiles/{user}', 'UserController@showProfile');
Route::post('/profiles/{user}/follow', 'UserController@followProfile');
Route::delete('/profiles/{user}/follow', 'UserController@unfollowProfile');

// Tags
Route::get('/tags', 'TagController@index');
