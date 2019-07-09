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

//Marketing
Route::get('/marketing','Marketing\BiodataController@front')->name('front');
Route::resource('/marketing/biodata','Marketing\BiodataController');
Route::get('/marketing/biodata/list','Marketing\BiodataController@list')->name('list');
Route::resource('/marketing/spk','Marketing\SpkController');
Route::resource('/marketing/pom','Marketing\PomController');

//Admin
Route::get('/admin','Admin\AdminController@index')->name('admin');
