<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            //Usuarios option
            ['id' => 1, 'nombre' => 'Administracion', 'slug' => 'admin', 'url' => null, 'icono' => null, 'padre' => null, 'orden' => 0, 'activo' => 1, 'creacion' => \Carbon\Carbon::now(), 'actualizacion' => \Carbon\Carbon::now()],
            ['id' => 2, 'nombre' => 'Perfiles', 'slug' => 'profiles.index', 'url' => 'perfiles', 'icono' => null, 'padre' => 1, 'orden' => 1, 'activo' => 1, 'creacion' => \Carbon\Carbon::now(), 'actualizacion' => \Carbon\Carbon::now()],
            ['id' => 3, 'nombre' => 'Usuarios', 'slug' => 'users.index', 'url' => 'usuarios', 'icono' => null, 'padre' => 1, 'orden' => 2, 'activo' => 1, 'creacion' => \Carbon\Carbon::now(), 'actualizacion' => \Carbon\Carbon::now()],
        ];

        App\Models\Menu::insert($menus);
    }
}
