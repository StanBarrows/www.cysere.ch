<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'published' => false,
            'order' => 3,
            'title' => 'Website',
            'description' => null,
            ]);

        $category = Category::create([
            'published' => false,
            'order' => 2,
            'title' => 'E-Mails',
            'description' => null,
            ]);

        $category = Category::create([
            'published' => true,
            'order' => 1,
            'title' => 'Forms',
            'description' => null,
            ]);

        $category = Category::create([
            'published' => true,
            'order' => 3,
            'title' => 'Tools & Services',
            'description' => null,
            ]);



    }
}
