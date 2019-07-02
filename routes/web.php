<?php

Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@index');

Route::get('/faqs', 'FAQsController@index');

Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/edit', 'ProductController@show');
Route::get('/products/edit/{id}', 'ProductController@edit');
Route::patch('/products/edit/{id}', 'ProductController@update');
Route::get('/products/delete/{id}', 'ProductController@destroy');

Route::get('/admin', 'AdminController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();