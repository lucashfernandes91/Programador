<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjetoTest extends TestCase
{
    public function testCreateProject()
    {
		$projeto = [
			'nome' 		=> "Projeto Teste",
			'descricao'	=> "Descrição teste",
			'dt_inicio'	=> "2019-01-02",
			'dt_fim' 	=> "2019-01-02"
		];

        $post = $this->json('POST', '/api/projetos/create',$projeto)->assertStatus(201);
        $delete = $this->json('DELETE', '/api/projetos/delete/' . $projeto['Id']);
    }

    public function testGettingAllProjects()
    {
    	$resposta = $this->get('/api/projetos')->assertStatus(200);

		$resposta->assertJsonStructure([
		    'data' => [[
		        'id',
		        'nome',
		        'descricao',
		        'dt_inicio',
		        'dt_fim'
		    ]]
		]);
    }

   


}
