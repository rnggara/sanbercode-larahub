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

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@formPertanyaan');
Route::get('/jawaban/{id}', 'JawabanController@index');
Route::get('pertanyaan/{id}/edit', 'PertanyaanController@editPertanyaan');

Route::post('/pertanyaan', 'PertanyaanController@savePertanyaan');
Route::post('/jawaban/{id}', 'JawabanController@save');
Route::put('pertanyaan/{id}/edit', 'PertanyaanController@updatePertanyaan');
Route::delete('pertanyaan/{id}', 'PertanyaanController@deletePertanyaan');
