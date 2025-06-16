<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name' => "John Doe",
                'function' => "Backend Developer",
                'testimony' => "I get a good impression,I carry out my project with all the possible quality and attention and support 24 hours a day.",
                'rating' => 5,
                'image' => "no-image.png",
            ],
            [
                'name' => "Jane Doe",
                'function' => "Frontend Developer",
                'testimony' => "I get a good impression,I carry out my project with all the possible quality and attention and support 24 hours a day.",
                'rating' => 5,
                'image' => "no-image.png",
            ],
        ]);
    }
}
