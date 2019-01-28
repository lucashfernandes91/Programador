<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;

use App\Http\Requests\ProjetosUpsertRequest;
use App\Http\Resources\ProjetosJson;
use App\Http\Resources\ProjetosCollection;

class ProjetosController extends Controller
{
    public function index()
    {
    	$projetos = Projeto::all();
    	
    	//return response()->json(($projetos), 200);
        return new ProjetosCollection($projetos);
    }

    public function store(ProjetosUpsertRequest $request)
    {
    	$projeto = new Projeto;
		$projeto = $projeto->create($request->all());	

        return new ProjetosJson($projeto);
    }
}
