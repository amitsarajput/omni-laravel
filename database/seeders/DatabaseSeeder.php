<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //\App\Models\Region::factory()->create();
            
        //\App\Models\Country::factory(10)->create();
        
        //\App\Models\Brand::factory(10)->create();

         \App\Models\SearchTag::factory(2)
             ->has(\App\Models\Brand::factory()->count(4))
             ->create();

        \App\Models\Tyre::factory(2)->create();
    }
}
