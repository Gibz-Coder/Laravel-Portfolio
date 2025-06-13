<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'institution' => "Batangas State University",
                'period' => "2015-2019",
                'degree' => "Bachelor of Science in Information Technology",
                'department' => "Information Technology",
            ],
            [
                'institution' => "Batangas State University",
                'period' => "2015-2019",
                'degree' => "Bachelor of Science in Information Technology",
                'department' => "Information Technology",
            ],
        ]);
    }
}
