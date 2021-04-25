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
            'title' => 'Website',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $category = Category::create([
            'title' => 'E-Mails',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $category = Category::create([
            'title' => 'Forms',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

    }
}
