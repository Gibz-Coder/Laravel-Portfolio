<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'name' => "Gibz Hapita",
                'home_image' => "no-image.png",
                'banner_image' => "no-image.png",
                'phone' => "+63-997-608-9161",
                'email' => "gibzhapita@gmail.com",
                'address' => "Batangas, Philippines",
                'description' => "Fullstack Web Developer with extencive knowledge and years of experience",
                'summary' => "Fullstack Web Developer with extencive knowledge and years of experience, working in web technologies and UI/UX design, delivering quality work",
                'tagline' => "Fullstack Web Developer with extencive knowledge and years of experience, working in web technologies and UI/UX design, delivering quality work",
                'cv' => "gibzhapita-cv.pdf",
            ]
        ]);
    }
}
