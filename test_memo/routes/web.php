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


/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/','MemosController@index')->name('index');

Route::get('new/memo','MemosController@newMemo')->name('newMemo');

Route::post('/store','MemosController@store')->name('store');

Route::get('/edit','MemosController@editMemo')->name('editMemo');

Route::post('/updata','MemosController@update')->name('update');

Route::get('/delete','MemosController@delete')->name('delete');

Route::get('/test','MemosController@test')->name('test');