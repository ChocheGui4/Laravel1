<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function testExample()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Juana');
    }
    function Detalles()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrar detalle del usuario: 5');
    }
    function Apodo()
    {
        $this->get('/saludo/Jose/Choche')
            ->assertStatus(200)
            ->assertSee('Bienvenido Jose, tu apodo es Choche');
    }
    function Nuevo()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
