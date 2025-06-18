<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'company' => "Company 1",
                'period' => "2015-2019",
                'position' => "Backend Developer",
            ],
            [
                'company' => "Company 2",
                'period' => "2015-2019",
                'position' => "Backend Developer",
            ],
        ]);
    }
}
