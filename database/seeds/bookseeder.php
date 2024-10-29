<?php
use App\book;
use App\authors;
use Illuminate\Database\Seeder;

class bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = authors::all();
        
        for($i= 1; $i <= 10; $i++) {
            book::create([
                'title' => 'Book Title ' . $i,
                'author_id' => $authors->random()->id,
                'published_year' => rand(2000, 2023),
            ]);
        }
        
    }
}
