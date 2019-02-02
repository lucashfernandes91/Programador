<?php

use Illuminate\Database\Seeder;
use App\Models\Gerente;

class GerenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gerente::create([
        	'nome' 		 => 'Gerente Seeder',
    		'projeto_id' => '1'
        ]);
    }
}
