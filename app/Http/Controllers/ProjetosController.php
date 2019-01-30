<?php

namespace App\Http\Controllers;

use App\Models\Projeto;

use Illuminate\Http\Request;
use App\Http\Resources\ProjetosCollection;
use App\Http\Resources\ProjetosJson;
use App\Http\Requests\ProjetosUpsertRequest;


class ProjetosController extends Controller
{
    public function index()
    {
      return new ProjetosCollection(Projeto::all());
    }

    public function store(ProjetosUpsertRequest $request)
    {
      $projeto = new Projeto([
        'nome'      => $request->get('nome'),
        'descricao' => $request->get('descricao'),
        'dt_inicio' => $request->get('dt_inicio'),
        'dt_fim'    => $request->get('dt_fim')
      ]);

      $projeto->save();

      return new ProjetosJson($projeto);
    }

    public function delete($id)
    {
      $projeto = Projeto::find($id);
      $projeto->delete();

      return response()->json('Registro deletado com sucesso!');
    }
}
