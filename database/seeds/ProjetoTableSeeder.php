<?php

use Illuminate\Database\Seeder;
use App\Models\Projeto;

class ProjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projeto::create([
			'nome'		=> 'Nom Seeder',
			'descricao' => 'Descrição Seeder',
			'dt_inicio' => '2020-12-15',
			'dt_fim' 	=> '2021-01-20'
        ]);
    }
}
