<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin = User::factory()->create([
            'name'     => 'Super Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);


        $super_admin->assignRole('Super Admin');


        $admin = User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        $admin->assignRole('Admin');
    }
}
