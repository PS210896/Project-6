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
                'compensation' => 500.00, // amount in decimal
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
                'compensation' => 600.00,
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
                'compensation' => 750.00,
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
                'compensation' => 450.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Cloud Computing',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'AWS Certified Solutions Architect',
                'location' => 'Seattle, WA',
                'from' => '2024-10-15',
                'spaces_left' => 6,
                'compensation' => 550.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Blockchain Development',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Smart Contract Development',
                'location' => 'Miami, FL',
                'from' => '2024-11-10',
                'spaces_left' => 8,
                'compensation' => 700.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Digital Marketing',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'SEO and Content Strategy',
                'location' => 'Chicago, IL',
                'from' => '2024-09-30',
                'spaces_left' => 5,
                'compensation' => 400.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Data Analysis',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Data Visualization with Python',
                'location' => 'Remote',
                'from' => '2024-10-25',
                'spaces_left' => 7,
                'compensation' => 500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'Game Development',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'Unity Game Development',
                'location' => 'Orlando, FL',
                'from' => '2024-12-10',
                'spaces_left' => 3,
                'compensation' => 650.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'course' => 'DevOps Engineering',
                'image_url' => 'https://picsum.photos/400/300',
                'learning_path' => 'CI/CD Pipelines',
                'location' => 'Boston, MA',
                'from' => '2024-10-05',
                'spaces_left' => 4,
                'compensation' => 700.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}