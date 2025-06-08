<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            [
                'name' => "Facebook",
                'link' => "https://www.facebook.com",
                'icon' => "fa-facebook",
            ],
            [
                'name' => "Twitter",
                'link' => "https://www.twitter.com",
                'icon' => "fa-twitter",
            ],
            [
                'name' => "Instagram",
                'link' => "https://www.instagram.com",
                'icon' => "fa-instagram",
            ],
            [
                'name' => "LinkedIn",
                'link' => "https://www.linkedin.com",
                'icon' => "fa-linkedin",
            ],
            [
                'name' => "GitHub",
                'link' => "https://www.github.com",
                'icon' => "fa-github",
            ],
        ]);
    }
}
