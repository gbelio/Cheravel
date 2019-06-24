<?php

Route::get('/', 'HomeController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();