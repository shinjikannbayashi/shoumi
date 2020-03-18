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

Route::get('shoumi/add', 'shoumicontroller@add')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('shoumi/add', 'shoumicontroller@create')->middleware('auth');

Route::post('shoumi/create','shoumicontroller@get');

Route::get('shoumi/edit','shoumicontroller@edit');

Route::post('shoumi/edit','shoumicontroller@update');

Route::get('shoumi/delete','shoumicontroller@delete');
