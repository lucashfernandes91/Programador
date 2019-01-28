<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('projetos', 'ProjetosController@index');
Route::post('projetos/add', 'ProjetosController@store');

/*
*	FUNCIONRÁRIOS
*/

Route::get('gerentes', 'GerentesController@index');   
Route::post('gerentes/add', 'GerentesController@store');   

Route::get('funcionarios', 'FuncionariosController@index');
Route::post('funcionarios/add', 'FuncionariosController@store');

