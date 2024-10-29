<?php
namespace Database\Seeder;

use App\Authors;
use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = Authors::all();
        
        for($i = 1; $i <= 10; $i++) {
            Book::create([
                'title' => 'Book Title ' . $i,
                'author_id' => $authors->random()->id,
                'published_year' => rand(2000, 2023),
            ]);
        }
    }
}
