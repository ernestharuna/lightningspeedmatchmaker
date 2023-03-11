<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Referrals;
use App\Models\Subscriptions;
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
        \App\Models\User::factory(500)->create();
        Referrals::factory(10)->create();
        Admin::factory(1)->create();

        // Subscriptions::create([
        //     'subscription_type' => 'Free Plan',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
        //     nesciunt!',
        //     'price' => '0',
        // ]);

        // Subscriptions::create([
        //     'subscription_type' => 'Weekly Plan',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
        //     nesciunt!',
        //     'price' => '10',
        // ]);
        // Subscriptions::create([
        //     'subscription_type' => 'Monthly Plan',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
        //     nesciunt!',
        //     'price' => '40',
        // ]);
        // Subscriptions::create([
        //     'subscription_type' => 'Annual Plan',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque excepturi ullam, quasi unde nihil
        //     nesciunt!',
        //     'price' => '150',
        // ]);
    }
}
