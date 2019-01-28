<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjetoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function ListaProjetosExample()
    {
        //$this->assertTrue(True)
        $response = $this->get('projetos');

        $response->assertStatus(200);;
    }
}
