<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'image' => "no-image.png",
                'title' => "Project 1",
                'description' => "Project 1 Description",
                'link' => "https://www.project1.com",
            ],
            [
                'image' => "no-image.png",
                'title' => "Project 2",
                'description' => "Project 2 Description",
                'link' => "https://www.project2.com",
            ],
        ]);
    }
}
