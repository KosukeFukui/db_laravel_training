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

Route::get('training', 'TrainingController@index');
Route::get('training/request', 'TrainingController@estimation_request');
Route::get('training/request/{id}', 'TrainingController@estimation_request_detail');
Route::get('training/request/{id}/new', 'TrainingController@estimation_request_detail_new');
Route::post('training/request/{id}/new', 'TrainingController@estimation_request_detail_post');
