<?php

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@index');

Route::get('/faqs', 'FAQsController@index');

Route::get('/products', 'ProductController@show');
Route::get('/products/create', 'ProductController@create')->middleware('admin');
Route::post('/products/create', 'ProductController@store')->middleware('admin');
Route::get('/products/edit', 'ProductController@show');
Route::get('/products/edit/{id}', 'ProductController@edit')->middleware('admin');
Route::patch('/products/edit/{id}', 'ProductController@update')->middleware('admin');
Route::get('/products/delete/{id}', 'ProductController@destroy')->middleware('admin');

Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();