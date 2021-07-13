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

Route::get('/series', 'SeriesController@index');
//rota::metodoGet('view, Controller@funcao); essa função pode ser considerada uma ação,1 controller
//pode conter varias ações
Route::get('/series/criar', 'SeriesController@create');
Route::post('/series/criar', 'SeriesController@store');