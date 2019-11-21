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


Route::get('/create-idea', function () {
    return view('pages.create_idea');
});


// to delete
Route::get('/idea', function () {
    return view('pages.idea');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ideas', 'IdeasController');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'IdeasController@index');
});