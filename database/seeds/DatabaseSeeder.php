<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjetoTableSeeder::class);
        $this->call(GerenteTableSeeder::class);
        $this->call(FuncionarioTableSeeder::class);
    }
}
