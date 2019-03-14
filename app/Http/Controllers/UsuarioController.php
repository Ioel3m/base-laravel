<?php

namespace App\Http\Controllers;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:crear-usuario,App\User');
    }

    public function crear()
    {
        return "crear";
    }
}
