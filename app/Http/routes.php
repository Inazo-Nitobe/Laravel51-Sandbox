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

Route::get('/', function () {
    return view('welcome');
});

// ブログポストを作成するフォームの表示…
Route::get('/post/create', 'PostController@create');

// 新しいブログポストを保存…
Route::post('/post', 'PostController@store');