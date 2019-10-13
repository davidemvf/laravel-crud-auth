<?php

Auth::routes();

Route::get('/', 'CatController@index') -> name('cat.index');

Route::get('/cat/{id}', 'CatAuthController@show') -> name('cat.show');
Route::get('/catCreate', 'CatAuthController@create') -> name('cat.create');
Route::post('/catPost', 'CatAuthController@store') -> name('cat.store');
Route::get('/catEdit/{id}', 'CatAuthController@edit') -> name('cat.edit');
Route::post('/catUpdate/{id}', 'CatAuthController@update') -> name('cat.update');
Route::get('/catDelete/{id}', 'CatAuthController@destroy') -> name('cat.delete');
