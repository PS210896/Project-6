<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Internship;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Checks whether it runs local
        if(env('APP_ENV') == 'local'){
            $this->call([
                InternshipSeeder::class,
                CompanySeeder::class,
                ContractSeeder::class,
            ]);

            User::factory()->create([
                'name' => 'Admin',
                'email' => 'test@example.com',
            ]);

            User::factory(10)->create();
        }
    }
}
