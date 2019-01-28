<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gerente;
use App\Models\Funcionario;

class Projeto extends Model
{
    protected $table = 'projetos';

    protected $fillable = [
    	'nome',
    	'descricao',
    	'dt_inicio',
    	'dt_fim'
    ];

    public $timestamps = false;

    //Relacionamento com tabela Gerentes -> Um Projeto pode ter muitos gerentes
    public function gerentes()
    {
    	return $this->hasMany(Gerente::class);
    }

    //Relacionamento com tabela Funcionários -> Um Projeto pode ter muitos funcionários
    public function funcionarios()
    {
    	return $this->hasMany(Funcionario::class);
    }

}
