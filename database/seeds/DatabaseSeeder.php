<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\BookSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}
