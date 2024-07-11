<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Address;
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

        User::factory(33)->create()->each(function ($user){
            $numAddress=random_int(4,10);

            Address::factory()->count($numAddress)
            ->for($user)
            ->create();

        });
    }
}
