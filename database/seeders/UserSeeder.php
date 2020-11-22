<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \App\Models\User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => '123456789',
            'role_id' => 1,
        ]);

        $user2 = \App\Models\User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => '123456789',
            'role_id' => 2,
        ]);

        $user3 = \App\Models\User::create([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => '123456789',
            'role_id' => 3,
        ]);

    }
}
