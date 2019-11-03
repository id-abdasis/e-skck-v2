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
    return view('layouts.app-client');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'SkckController@index');
    Route::get('daftar-skck', 'SkckController@daftar_skck')->name('daftar-skck');
    Route::get('sunting-pendaftar/{id}', 'SkckController@sunting_pendaftar')->name('sunting-pendaftar');
    Route::get('sunting-template', 'SkckController@template')->name('template');
    Route::post('update-templaet', 'SkckController@update_template')->name('update-template');
    Route::get('detail-pendaftar/{id}/profile', 'SkckController@detail_pendaftar')->name('detail');
    Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
        Route::get('/' , 'UserController@index')->name('daftar-user');
        Route::get('/tambah-user' , 'UserController@tambah_user')->name('user.tambah-user');
    });
});



Route::get('/pendaftaran-skck', 'SkckController@pendaftaran')->name('pendaftaran-skck');
Route::post('/pendaftaran-skck', 'SkckController@store_skck')->name('store-skck');
Route::get('/install', 'SkckController@install')->name('install');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
