<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Summa College',
                'adress' => 'Sterrenlaan 10',
                'phonenumber' => '06 12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
