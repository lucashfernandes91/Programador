<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetosUpsertRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome"      => "required",
            "descricao" => "required",
            "dt_inicio" => "required",
            "dt_fim"    => "required",
        ];
    }
}
