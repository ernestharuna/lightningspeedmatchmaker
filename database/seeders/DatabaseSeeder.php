<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seeks;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // Admin::factory()->create([
        //     'first_name' => 'Ernest',
        //     'last_name' => 'Haruna',
        //     'email' => 'ernestharuna1@gmail.com',
        //     'password' => 'ernestharuna1@gmail.com',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Seeks::factory(3)->create();
    }
}
