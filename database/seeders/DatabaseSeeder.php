<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'     => 'aswarkasim',
            'email'    => 'aswarkasim@gmail.com',
            'password' => bcrypt('password'),
            'role'     => 'user'
        ]);

        User::create([
            'name'     => 'lalu',
            'email'    => 'lalu@gmail.com',
            'password' => bcrypt('password'),
            'role'     => 'admin'
        ]);
    }
}
