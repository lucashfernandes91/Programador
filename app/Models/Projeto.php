<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
      'nome',
      'descricao',
      'dt_inicio',
      'dt_fim'
    ];

    public $timestamps = false;
}
