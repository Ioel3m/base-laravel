<?php

use App\User;
use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{

    public function run()
    {
        Bouncer::allow('administrador')->to('crear-usuario', User::class);
    }
}
