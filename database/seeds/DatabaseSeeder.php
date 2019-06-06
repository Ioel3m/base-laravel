<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(BouncerSeeder::class);
    }
}
