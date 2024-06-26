<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Gustavo Telles',
            'phone' => '(11) 98765-4321',
            'email' => 'gtelles@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
