<?php

use Illuminate\Support\Facades\Route;

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

// ======================== import ======================== //
Route::get('/importexcel3', 'App\Http\Controllers\ImportExcleController@index')->name('importexcel3');
Route::post('/importexcel3/import', 'App\Http\Controllers\ImportExcleController@import');

// ------------------------ delete ------------------------- //
Route::get('importexcel3/{importID}','App\Http\Controllers\ImportExcelController@importDelete')->name('importDelete');
// ------------------------ insert ------------------------ //
Route::post('importInsert','App\Http\Controllers\ImportExcelController@importInsert')->name('importInsert');
// ------------------------ update ------------------------ //

Route::post('importUpdate','App\Http\Controllers\ImportExcelController@importUpdate')->name('importUpdate');
