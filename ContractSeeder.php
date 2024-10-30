<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contracts')->insert([
            'course' => 'Programming',
            'learning_path' => 'Software Development',
            'location' => 'Online',
            'from' => '2024-10-15',
            'spaces_left' => 10,
            'compensation' => 500.00,
            // other fields...
        ]);
        
    }
}
