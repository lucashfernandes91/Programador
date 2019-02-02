<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    protected $fillable = [
    	'nome',
    	'projeto_id'
    ];

    public $timestamps = false;
}
