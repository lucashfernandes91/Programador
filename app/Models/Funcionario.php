<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
    		'nome',
    		'projeto_id',
    		'gerente_id'
    	];

    public $timestamps = false;
}

