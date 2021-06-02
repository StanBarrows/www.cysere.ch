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
            'name' => 'Sebastian Fix',
            'email' => 'sebastian.fix@students.fhnw.ch',
            'password' => bcrypt('password')
        ]);

        $user = User::create([
            'name' => 'Driton Selami',
            'email' => 'driton.selami@students.fhnw.ch',
            'password' => bcrypt('password')
        ]);

    }
}
