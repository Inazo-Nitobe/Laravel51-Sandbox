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

/*
Route::get('/', function (Illuminate\Http\Request $request) {
//    return view('welcome');
    $param1 = $request->session()->get('param1', '0');
    return view('index', ['param1' => $param1]);
});


Route::post('/', function (Illuminate\Http\Request $request) {
//    return view('welcome');
    $param1 = $request->get('param1');
    $request->session()->put('param1', $param1);
    return view('index', ['param1' => $param1]);
});
*/
Route::get('/', function (Illuminate\Http\Request $request) {
//    return view('welcome');
    $param1 = session('param1', 0);
    return view('index', ['param1' => $param1]);
});


Route::post('/', function (Illuminate\Http\Request $request) {
//    return view('welcome');
    $param1 = $request->get('param1');
    session(['param1' => $param1]);
    return view('index', ['param1' => $param1]);
});
