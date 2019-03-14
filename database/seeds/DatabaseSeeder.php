<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(BouncerSeeder::class);
        $this->call(BouncerSeeder::class);
        $this->call(MenuSeeder::class);

        $user = App\User::create(
            [
                'name' => 'admin',
                'password' => Hash::make('1234'),
                'email' => 'correo@correo.ec',
            ]
        );

        Bouncer::assign('administrador')->to($user->id);

    }
}
