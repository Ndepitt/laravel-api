<?php

namespace Database\Seeder;

use App\Authors;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Authors::create(['name'=> 'Author1', 'birthdate' => '1980-01-01']);
        Authors::create(['name'=> 'Author2', 'birthdate' => '1985-02-02']);
        Authors::create(['name'=> 'Author3', 'birthdate' => '1990-03-03']);
        Authors::create(['name'=> 'Author4', 'birthdate' => '1975-04-04']);
        Authors::create(['name'=> 'Author5', 'birthdate' => '1982-05-05']);
    }
}
