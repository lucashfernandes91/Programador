<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;
use App\Http\Resources\GerentesJson;
use App\Http\Requests\GerentesUpsertRequest;

class GerentesController extends Controller
{
	public function store(GerentesUpsertRequest $request)
	{
		$gerente = new Gerente([
			'nome'		 => $request->get('nome'),
			'projeto_id' => $request->get('projeto_id')
		]);

		$gerente->save();

		//return new GerentesJson($gerente);
		return response()->json('Criado com sucesso!');
	}
}
