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

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Hosting & Provider',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Maintenance',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',

        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Analytics & Tracking',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Terms & Conditions',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 2,
            'title' => 'Newsletters',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 2,
            'title' => 'Bulk mailings',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',

        ]);

        $service = Service::create([
            'published' => true,
            'category_id' => 3,
            'order' => 1,
            'title' => 'Contact Forms',
            'description' => 'A contact form is a form on your company website where a user fills out information about themselves. This can include name, email, address, phone number and more. ',
        ]);

        $service = Service::create([
            'published' => true,
            'category_id' => 3,
            'order' => 2,
            'title' => 'Newsletter Sign-Up',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 4,
            'title' => 'Chatbot',
            'description' => 'I love lollipop gummies candy icing. Macaroon chupa chups lollipop marshmallow cake gingerbread I love chocolate bar. Dessert pie wafer cupcake powder.',
        ]);
    }
}
