<?php
//home
Route::get('/', 'UrlController@index');

//auth
Auth::routes();

//urls
Route::get('/recent', 'UrlController@recentUrls');
Route::get('/top', 'UrlController@topUrls');
Route::get('/{id}', 'UrlController@redirect');
Route::post('/create', 'UrlController@store');

//contact
Route::post('/contact', 'ContactController@postContact'); 

//simple api for chart on top
