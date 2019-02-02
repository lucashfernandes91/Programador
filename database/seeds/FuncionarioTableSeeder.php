<?php

use Illuminate\Database\Seeder;
use App\Models\Funcionario;	

class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
    		'nome' 		  => 'Funcionario Seed',
    		'projeto_id'  => 1,
    		'gerente_id'  => 1
        ]);
    }
}
