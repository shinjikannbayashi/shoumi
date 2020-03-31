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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shoumi/add', 'shoumicontroller@add')->middleware('auth');

Route::post('shoumi/create', 'shoumicontroller@create')->middleware('auth');

Route::get('shoumi/index','shoumicontroller@index')->middleware('auth');

Route::post('shoumi/index','shoumicontroller@index')->middleware('auth');

Route::get('shoumi/edit','shoumicontroller@edit')->middleware('auth');

Route::post('shoumi/update','shoumicontroller@update')->middleware('auth');

Route::get('shoumi/delete','shoumicontroller@delete')->middleware('auth');
