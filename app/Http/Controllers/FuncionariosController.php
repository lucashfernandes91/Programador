<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

use App\Http\Requests\FuncionariosUpsertRequest;
use App\Http\Resources\FuncionariosJson;

class FuncionariosController extends Controller
{
    /*public function index()
    {
    	$funcionarios = Funcionario::all();

    	return $funcionarios;
    }*/

    public function store(FuncionariosUpsertRequest $request)
    {
    	$funcionario = new Funcionario;
    	$funcionario = $funcionario->create($request->all());

    	return new FuncionariosJson($funcionario);
    }
}
