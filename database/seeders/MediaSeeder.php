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
                'icon' => "facebook-f",
            ],
            [
                'name' => "Twitter",
                'link' => "https://www.twitter.com",
                'icon' => "twitter",
            ],
            [
                'name' => "Instagram",
                'link' => "https://www.instagram.com",
                'icon' => "instagram",
            ],
            [
                'name' => "LinkedIn",
                'link' => "https://www.linkedin.com",
                'icon' => "linkedin-alt",
            ],
            [
                'name' => "GitHub",
                'link' => "https://www.github.com",
                'icon' => "github-alt",
            ],
            [
                'name' => "Facebook Messenger",
                'link' => "https://www.messenger.com",
                'icon' => "facebook-messenger",
            ],
            [
                'name' => "Telegram",
                'link' => "https://t.me/",
                'icon' => "telegram",
            ],
        ]);
    }
}
