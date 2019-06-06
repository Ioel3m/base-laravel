<?php

namespace App\Http\Controllers;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:create-users', 'can:users']);
    }

    public function crear()
    {
        return "crear";
    }
}
