<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;

use App\Http\Requests\GerentesUpsertRequest;
use App\Http\Resources\GerentesJson;


class GerentesController extends Controller
{
    /*public function index()
    {
    	$gerentes = Gerente::all();

    	return ($gerentes);
    }*/

	public function store(GerentesUpsertRequest $request)
	{
		$gerente = new Gerente;
		$gerente = $gerente->create($request->all());

		return new GerentesJson($gerente);
	}
}
