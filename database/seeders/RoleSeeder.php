<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Beheerder',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Student',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stagebedrijf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Leraar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
