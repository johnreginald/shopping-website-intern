<?php

Route::get('items/create', "ItemController@create");
Route::post('items/store', "ItemController@store");
Route::get('items', "ItemController@index");
Route::get('items/{id}', "ItemController@show");
Route::get('items/edit/{id}', "ItemController@edit");
Route::post('items/update/{id}', "ItemController@update");
Route::get('items/delete/{id}', "ItemController@destroy");

Route::get('categories/create', "CategoryController@create");
Route::post('categories/store', "CategoryController@store");
Route::get('categories', "CategoryController@index");
Route::get('categories/{id}', "CategoryController@show");
Route::get('categories/edit/{id}', "CategoryController@edit");
Route::post('categories/update/{id}', "CategoryController@update");
Route::get('categories/delete/{id}', "CategoryController@destroy");