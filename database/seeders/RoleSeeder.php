<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\Role::create([
            'name' => 'Admin',
            'slug' => 'Admin',
            'params' => [
                'Low SMS Notification' => true,
            ]
        ]);

        $supplier = \App\Models\Role::create([
            'name' => 'Supplier',
            'slug' => 'supplier',
            'params' => [
                'Quick Notify' => true,
            ]
        ]);

        $customer = \App\Models\Role::create([
            'name' => 'Customer',
            'slug' => 'customer',
            'params' => [
                'Quick Contact' => true,
                'Quick Reply' => true,
            ]
        ]);
    }
}
