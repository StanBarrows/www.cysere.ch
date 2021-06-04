<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'published' => false,
            'name' => 'CySeRe Fix',
            'email' => 'info@cysere.ch',

        ]);

        $user = User::create([
            'published' => true,
            'name' => 'Sebastian Fix',
            'email' => 'sebastian.fix@students.fhnw.ch',
            'linked_in' => 'https://www.linkedin.com/in/fix-sebastian',
            'github' => 'https://github.com/StanBarrows'
        ]);

        $user = User::create([
            'published' => true,
            'name' => 'Driton Selami',
            'email' => 'driton.selami@students.fhnw.ch',
            'linked_in' => 'https://www.linkedin.com/in/driton-selami/',
        ]);

        $user = User::create([
            'published' => true,
            'name' => 'Michelle Cuthbert',
            'email' => 'michelle.cuthbert@students.fhnw.ch',
            'linked_in' => 'https://www.linkedin.com/in/michelle-cuthbert-1a793192/',

        ]);

        $user = User::create([
            'published' => true,
            'name' => 'Kelly Rinnas ',
            'email' => 'kelly.rinnas@students.fhnw.ch',
            'linked_in' => 'https://www.linkedin.com/in/kellyrinnas/',
        ]);

    }
}
