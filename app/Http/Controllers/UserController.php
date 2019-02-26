<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->has('empty')){
            $users = [];
        }else{
            $users = [
                'Joel','Juana','Jenny','Any',
               ];
        }

        $title = 'Listado de usuarios';


        return view('users',compact('title','users'));
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
