<?php

use App\authors;
use Illuminate\Database\Seeder;

class authorseeder extends Seeder
{
    public function run()
    {
        authors::create(['name'=>'author1', 'birthdate' => '1980-01-01']);
        authors::create(['name'=>'author2', 'birthdate' => '1985-02-02']);
        authors::create(['name'=>'author3', 'birthdate' => '1990-03-03']);
        authors::create(['name'=>'author4', 'birthdate' => '1975-04-04']);
        authors::create(['name'=>'author5', 'birthdate' => '1982-05-05']);
    }
}
