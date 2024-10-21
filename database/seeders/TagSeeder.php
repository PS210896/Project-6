<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'name' => 'bol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'bbl',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'hbo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'uni',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
