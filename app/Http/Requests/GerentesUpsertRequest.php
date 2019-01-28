<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GerentesUpsertRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome"       => "required",
            "projeto_id" => "required",
        ];
    }
}
