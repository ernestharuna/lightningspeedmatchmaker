<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Seeks;
use App\Models\Subscriptions;
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
        \App\Models\User::factory(40)->create();
        
        Admin::create([
            'first_name' => 'Ernest',
            'last_name' => 'Haruna',
            'email' => 'udwaghie@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        Subscriptions::create([
            'subscription_type' => 'Free Plan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
            nesciunt!',
            'price' => '0',
        ]);

        Subscriptions::create([
            'subscription_type' => 'Weekly Plan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
            nesciunt!',
            'price' => '10',
        ]);
        Subscriptions::create([
            'subscription_type' => 'Monthly Plan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
            nesciunt!',
            'price' => '40',
        ]);
        Subscriptions::create([
            'subscription_type' => 'Annual Plan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
            nesciunt!',
            'price' => '150',
        ]);
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
