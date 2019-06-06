<?php

use App\User;
use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{
    public function run()
    {
        $user = App\User::create(
            [
                'name' => 'admin',
                'password' => Hash::make('1234'),
                'email' => 'correo@correo.ec',
            ]
        );

        Bouncer::assign('administrador')->to($user->id);
        Bouncer::allow('administrador')->everything();
    }
}
