<?php

use Illuminate\Http\Request;

Route::get('/projetos', 'ProjetosController@index');
Route::post('/projetos/create', 'ProjetosController@store');
//Route::get('/projetos/edit/{id}', 'ProjetosController@edit');
//Route::post('/projetos/update/{id}', 'ProjetosController@update');
Route::delete('/projetos/delete/{id}', 'ProjetosController@delete');

Route::post('/gerentes/create', 'GerentesController@store');

Route::post('/funcionarios/create', 'FuncionariosController@store');