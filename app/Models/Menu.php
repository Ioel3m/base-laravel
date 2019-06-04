<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $filleable = [
        'id', 'nombre', 'slug', 'url', 'padre', 'orden', 'activo', 'icono', 'creacion', 'actualizacion',
    ];

    public function getChildren($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['padre']) {
                $children = array_merge($children, [array_merge($line1, ['submenu' => $this->getChildren($data, $line1)])]);
            }
        }
        return $children;
    }

    public function optionsMenu()
    {
        return $this->where('activo', 1)
            ->orderby('padre')
            ->orderby('orden')
            ->orderby('nombre')
            ->get()
            ->toArray();
    }

    public static function menus()
    {
        $menus = new Menu();
        $data = $menus->optionsMenu();
        $menuAll = [];
        foreach ($data as $line) {
            $item = [array_merge($line, ['submenu' => $menus->getChildren($data, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }


        foreach ($menuAll as $index => $menu) {
            if (Bouncer::can($menu['slug'])) {
                array_push($menus->menuAll, $menu);
            }
  
        }

        return $menus->menuAll;
    }


}
