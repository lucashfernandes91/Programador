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
        return $this->collection->transform(function(Projeto $projeto) {
            return [
                'id'        => $projeto->id,
                'descricao' => $projeto->descricao,
                'dt_inicio' => $projeto->dt_inicio,
                'dt_fim'    => $projeto->dt_fim
            ];
        });
    }
}
