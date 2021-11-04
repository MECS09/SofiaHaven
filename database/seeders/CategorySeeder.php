<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'name' => "Sofia's Books and Events"
        ]);
        
        Category::insert([
            'name' => "Book, Movie, and TV Series Recommendations"
        ]);
        
        Category::insert([
            'name' => "General Topic"
        ]);

        

    }
}
