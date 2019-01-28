<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

class Gerente extends Model
{
    protected $table = 'gerentes';

    protected $fillable = [
    	'nome',
    	'projeto_id'
    ];
    
    public $timestamps = false;

	//Relacionamento com tabela Funcionarios -> Um Gerente pode ter muitos funcionários
    public function funcionarios()
    {
    	return $this->hasMany(Funcionario::class);
    }
 }
