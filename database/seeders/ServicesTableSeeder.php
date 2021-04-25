<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            'sebastian.fix@codebar.ch',
            'driton.selami@gmail.com'
        ];

        $service = Service::create([
            'category_id' => 1,
            'title' => 'Hosting & Provider',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

        $service = Service::create([
            'category_id' => 1,
            'title' => 'Maintenance',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

        $service = Service::create([
            'category_id' => 1,
            'title' => 'Analytics & Tracking',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

        $service = Service::create([
            'category_id' => 1,
            'title' => 'Terms & Conditions',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

        $service = Service::create([
            'category_id' => 2,
            'title' => 'Newsletters',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

        $service = Service::create([
            'category_id' => 2,
            'title' => 'Bulk mailings',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),

        ]);

        $service = Service::create([
            'category_id' => 3,
            'title' => 'Contact Forms',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
            'body' => file_get_contents(database_path('markdown/service.md')),
            'authors' => $authors,
            'published_at' => Carbon::now()->toDateTimeString(),
        ]);

    }
}
