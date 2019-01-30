<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FuncionariosUpsertRequest;
use App\Models\Funcionario;

use App\Http\Resources\FuncionariosJson;

class FuncionariosController extends Controller
{
    public function store(FuncionariosUpsertRequest $request)
    {
        $funcionario = new Funcionario([
            'nome'       => $request->get('nome'),
            'projeto_id' => $request->get('projeto_id'),
            'gerente_id' => $request->get('gerente_id'),
        ]);

        $funcionario->save();

        return new FuncionariosJson($funcionario);
    }
}
