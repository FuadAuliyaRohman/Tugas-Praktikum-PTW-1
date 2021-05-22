<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\MyController@home')->name('tugas.home');
Route::get('artikel', '\App\Http\Controllers\MyController@artikel')->name('tugas.artikel');
Route::get('contact', '\App\Http\Controllers\MyController@kontak')->name('tugas.kontak');