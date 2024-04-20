<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'manish@mailinator.com',
            'password' => bcrypt('123456789'),
        ]);

        // Create multiple users using factory
        User::factory()->count(10)->create();
    }
}
