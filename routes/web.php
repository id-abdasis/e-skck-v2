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
    Route::get('hapus-pendaftar/{id}', 'SkckController@hapus_pendaftar')->name('hapus-pendaftar');
    Route::post('update-template', 'SkckController@update_template')->name('update-template');
    Route::get('detail-pendaftar/{id}/profile', 'SkckController@detail_pendaftar')->name('detail');
    Route::get('print-pendaftar/{id}/profile', 'SkckController@detail_pendaftar')->name('print-pendaftar');
    Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
        Route::get('/' , 'UserController@index')->name('daftar-user');
        Route::get('/tambah-user' , 'UserController@tambah_user')->name('user.tambah-user');
        Route::post('/store-user' , 'UserController@store_user')->name('user.store-user');
        Route::get('/hapus-user/{id}' , 'UserController@hapus_user')->name('user.hapus-user');
        Route::get('/sunting-user/{id}/profile', 'UserController@sunting_user')->name('user.sunting-user');
        Route::post('/update-user/{id}/', 'UserController@update_user')->name('user.update-user');
    });
    Route::group(['prefix' => 'template'], function () {
        Route::get('setting-template', 'TemplateController@setting_template')->name('template.setting-template');
        Route::post('setting-template', 'TemplateController@update_template')->name('template.update-template');
    });
});



Route::get('/pendaftaran-skck', 'SkckController@pendaftaran')->name('pendaftaran-skck');
Route::post('/pendaftaran-skck', 'SkckController@store_skck')->name('store-skck');
Route::get('/install', 'SkckController@install')->name('install');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
