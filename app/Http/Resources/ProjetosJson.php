<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjetosJson extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Id'             => $this->id,
            'Nome'           => $this->nome,
            'Descrição'      => $this->descricao,
            'Data de Inicio' => $this->dt_inicio,
            'Data Final'     => $this->dt_fim
        ];
    }
}
