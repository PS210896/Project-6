<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('internships')->insert([
            [
                'course' => 'Web Development',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Full Stack Development',
                'location' => 'New York, NY',
                'from' => '2024-10-01', // start date
                'spaces_left' => 5,
                'compensation' => 1000.00, // amount in decimal
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Data Science',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Machine Learning',
                'location' => 'San Francisco, CA',
                'from' => '2024-09-15',
                'spaces_left' => 3,
                'compensation' => 1200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Graphic Design',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'UI/UX Design',
                'location' => 'Remote',
                'from' => '2024-11-01',
                'spaces_left' => 10,
                'compensation' => null, // no compensation for this internship
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Cybersecurity',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Network Security',
                'location' => 'Austin, TX',
                'from' => '2024-12-01',
                'spaces_left' => 2,
                'compensation' => 1500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Mobile App Development',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Android Development',
                'location' => 'Los Angeles, CA',
                'from' => '2024-10-20',
                'spaces_left' => 4,
                'compensation' => 900.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
