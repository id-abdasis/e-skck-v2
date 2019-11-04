<?php



Route::get('/provinsi', 'KotaController@provinsi')->name('provinsi');
Route::get('/kabupaten/{id}', 'KotaController@kabupaten')->name('kabupaten');
Route::get('/kecamatan/{id}', 'KotaController@kecamatan')->name('kecamatan');
Route::get('/kelurahan/{id}', 'KotaController@kelurahan')->name('kelurahan');

Route::group(['prefix' => 'v2'], function () {
    Route::get('/provinsi', 'KotaController@provinsi_id')->name('provinsi');
    Route::get('/kabupaten/{id}', 'KotaController@kabupaten_id')->name('kabupaten');
    Route::get('/kecamatan/{id}', 'KotaController@kecamatan_id')->name('kecamatan');
    Route::get('/kelurahan/{id}', 'KotaController@kelurahan_id')->name('kelurahan');
});