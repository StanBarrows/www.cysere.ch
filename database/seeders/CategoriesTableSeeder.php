<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
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
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $category = Category::create([
            'published' => false,
            'order' => 2,
            'title' => 'E-Mails',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $category = Category::create([
            'published' => true,
            'order' => 1,
            'title' => 'Forms',
            'description' => 'A form is an online page that allows for user input. It is an interactive page that mimics a paper document or form, where users fill out particular fields',
        ]);

        $category = Category::create([
            'published' => true,
            'order' => 3,
            'title' => 'Tools & Services',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);



    }
}
