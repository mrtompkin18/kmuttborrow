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
    return view('app');
});

// *************** user ****************

Route::get('/user/create', function () {
    return view('user/create');
});

Route::get('/user/{userid}/view', function ($userid) {
    return view('user/view')->with('userid',$userid);
});

Route::get('/user/{userid}/edit', function ($userid) {
    return view('user/edit')->with('userid',$userid);
});

Route::get('/user/list', function () {
    return view('user/list');
});
