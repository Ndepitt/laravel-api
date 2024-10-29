<?php

namespace Database\Seeder;

use Illuminate\Database\Seeder;

class  DatabaseSeeder extends Seeder

{
    public function run()
    {
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,


        ]);
    }
}
