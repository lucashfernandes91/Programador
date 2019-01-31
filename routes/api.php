<?php

use Illuminate\Http\Request;

Route::get('/projetos', 'ProjetosController@index');
Route::post('/projetos/create', 'ProjetosController@store');
Route::delete('/projetos/delete/{id}', 'ProjetosController@delete');

Route::post('/gerentes/create', 'GerentesController@store');

Route::post('/funcionarios/create', 'FuncionariosController@store');