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

// PRINCIPAL
Route::get('/', 'PageController@index')->name('index');

// TIPOS DE HABITACION
Route::get('/roomTypes', 'RoomTypesController@getAll')->name('roomTypes');
Route::get('/roomTypes/new', 'RoomTypesController@create')->name('roomTypesNew');
Route::get('/roomTypes/{hotRoomType}/edit', 'RoomTypesController@edit')->name('roomTypesEdit');
Route::post('/roomTypes/store', 'RoomTypesController@store');
Route::put('/roomTypes/{hotRoomType}', 'RoomTypesController@update');
Route::delete('/roomTypes/{hotRoomType}', 'RoomTypesController@destroy')->name('roomTypeDestroy');

// HABITACION
Route::get('/rooms', 'HotRoomController@getAll')->name('rooms');
Route::get('/rooms/new', 'HotRoomController@create')->name('roomsNew');
Route::post('/rooms/store', 'HotRoomController@store');