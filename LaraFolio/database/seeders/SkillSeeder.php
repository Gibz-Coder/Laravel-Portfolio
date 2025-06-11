<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            [
                'name' => "PHP",
                'proficiency' => 90,
                'service_id' => 1,
            ],
            [
                'name' => "Laravel",
                'proficiency' => 80,
                'service_id' => 1,
            ],
            [
                'name' => "JavaScript",
                'proficiency' => 70,
                'service_id' => 1,
            ],
            [
                'name' => "React",
                'proficiency' => 60,
                'service_id' => 1,
            ],
            [
                'name' => "HTML",
                'proficiency' => 90,
                'service_id' => 2,
            ],
            [
                'name' => "CSS",
                'proficiency' => 80,
                'service_id' => 2,
            ],
            [
                'name' => "Bootstrap",
                'proficiency' => 70,
                'service_id' => 2,
            ],
            [
                'name' => "Tailwind",
                'proficiency' => 60,
                'service_id' => 2,
            ],
        ]);
    }
}
