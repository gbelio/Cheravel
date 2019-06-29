<?php

Route::get('/', 'HomeController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/faqs', 'FAQsController@index');
Route::get('/products', 'ProductController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();