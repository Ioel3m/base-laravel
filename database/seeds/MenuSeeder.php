<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{

    public function run()
    {

        $menus = [
            ['id' => 1, 'nombre' => 'Usuarios', 'slug' => 'users', 'url' => null, 'icono' => null, 'padre' => null, 'orden' => 0, 'activo' => 1, 'creacion' => \Carbon\Carbon::now(), 'actualizacion' => \Carbon\Carbon::now()],
            ['id' => 2, 'nombre' => 'Crear', 'slug' => 'create-users', 'url' => null, 'icono' => null, 'padre' => 1, 'orden' => 1, 'activo' => 1, 'creacion' => \Carbon\Carbon::now(), 'actualizacion' => \Carbon\Carbon::now()],
        ];

        App\Models\Menu::insert($menus);
    }
    
}
