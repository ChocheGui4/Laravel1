<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Joel',
            'Juana',
            'Jenny',
            'Any',
            '<script>alert("Clicker")</script>'
        ];

        return view('users')->with([
        'users' => $users,
        'title' => 'Listado de usuarios'
    ]);;
    }
    public function show($id)
    {
        return "Mostrar detalle del usuario: {$id}";
    }
    public function create()
    {
        return 'Crear nuevo usuario';
    }
}
