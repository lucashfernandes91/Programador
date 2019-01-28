<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Projeto;

class ProjetosCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        /*return [
            'data' => $this->collection->transform(function (Projetos $projetos) 
                {
                    return[
                   'nome' => $this->$projetos->nome
               ];
                }),               
        ];*/
        //return ['data' => $this->collection];

        return $this->collection->transform(function(Projeto $projeto) {
            return [
                'Id'             => $projeto->id,
                'Descrição'      => $projeto->descricao,
                'Data de Inicio' => $projeto->dt_inicio,
                'Data Final'     => $projeto->dt_fim
            ];
        });

    }
}
