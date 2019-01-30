<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GerentesJson extends JsonResource
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
            "Id"   => $this->id,
            "Nome" => $this->nome,
            "Projeto ID" => $this->projeto_id
        ];
    }
}
