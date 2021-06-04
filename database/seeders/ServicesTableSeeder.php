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
            'description' => 'What is a hosting provider, and what does it do? A web hosting provider is a company that enables businesses to make their website platforms available on the world wide web. ',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Maintenance',
            'description' => 'How can you keep your network up and running? A network requires maintenance, much as anything else you do! Basically this means you have to take specific steps to ensure that your network stays up and running.',

        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Analytics & Tracking',
            'description' => 'Are you eager to know how your website is perceived to customers? Then you need to ensure that you are tracking your websites analytics. Analytics help you quantifiably review your website strategies and if your company’s KPI (key performance index) are being met.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 1,
            'title' => 'Terms & Conditions',
            'description' => 'If your website provides interactive information with its customers, then it is important to also have a terms and conditions page. Essentially terms & conditions are rights and responsibilities of anyone using the site.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 2,
            'title' => 'Newsletters',
            'description' => 'Newsletters are marketing messages that can help promote the benefit of your company’s product or services. A newsletter is generally sent to your subscribed customers via email, and provides them with a short article or helpful information.',
        ]);

        $service = Service::create([
            'published' => false,
            'category_id' => 2,
            'title' => 'Bulk mailings',
            'description' => 'Bulk mailing refers to sending a large quantity of emails to customers at a reduced rate. Therefore having a platform that creates bulk emails is an incredibly useful tool for your business. It helps keep costs low and provides efficient communication. ',

        ]);

        $service = Service::create([
            'published' => true,
            'category_id' => 3,
            'order' => 1,
            'title' => 'Contact Forms',
            'description' => 'A contact form is a form on your company website where a user fills out information about themselves. This can include name, email, address, phone number and more. ',
        ]);


        $service = Service::create([
            'published' => false,
            'category_id' => 4,
            'title' => 'Chatbot',
            'description' => 'A computer program designed to simulate conversation with human users, especially over the internet.',
        ]);
    }
}
