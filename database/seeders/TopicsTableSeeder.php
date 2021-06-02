<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = Service::where('id', 7)->first();

        Topic::create([
            'service_id' => $service->id,
            'published' => true,
            'order' => 1,
            'title' => 'Do you keep data from contact forms?',
            'explanation' => 'Lorem Ipsum',
            'body' => 'Personal information, such as contact form details, names, email addresses, and messages, is considered personal information under GDPR and must be protected (or not saved at all!). It\'s worth noting that this isn\'t just a place where you\'ll gather email addresses or other information for marketing purposes. When you store and process data, such as saving a contact form to a database or using the information given by a customer via a contact form to respond to their message, GDPR needs you to obtain permission. Basically, for every contact form you have to provide a permission check-box.',
        ]);

        Topic::create([
            'service_id' => $service->id,
            'published' => true,
            'order' => 2,
            'title' => 'Do you use simple and straightforward language on your forms?',
            'explanation' => 'Lorem Ipsum',
            'body' => 'The GDPR mandates accountability and recognizes only relevant, informed, and freely given consent as legitimate. Your users won\'t be able to give informed consent if they don\'t understand what they\'re signing up for.',
        ]);

        Topic::create([
            'service_id' => $service->id,
            'published' => true,
            'order' => 3,
            'title' => 'Does it have granular consent options?',
            'explanation' => 'Lorem Ipsum',
            'body' => 'The GDPR mandates accountability and recognizes only relevant, informed, and freely given consent as legitimate. Your users won\'t be able to give informed consent if they don\'t understand what they\'re signing up for.',
        ]);

    }
}



