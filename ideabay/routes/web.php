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
    return view('pages.home');
});

Route::get('/create_idea', function () {
    return view('create_idea');
});

Route::get('/idea', function () {
    return view('pages.idea');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ideas', 'IdeasController');
