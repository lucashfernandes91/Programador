<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FuncionariosJson extends JsonResource
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
            "Id"         => $this->id,
            "Nome"       => $this->nome,
            "Id_Projeto" => $this->projeto_id,
            "Id_Gerente" => $this->gerente_id
        ];
    }
}
