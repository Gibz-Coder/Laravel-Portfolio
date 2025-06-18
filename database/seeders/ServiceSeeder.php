<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => "Backend Developer",
                'icon' => "fa-server",
                'description' => "Sapiente odit ut ipsam neque dolorum et. Officiis error dicta pariatur quidem. Saepe dignissimos et at error dolores asperiores. Earum id sed ratione ducimus enim voluptate praesentium.",
            ],
            [
                'name' => "Frontend Developer",
                'icon' => "fa-laptop-code",
                'description' => "Sapiente odit ut ipsam neque dolorum et. Officiis error dicta pariatur quidem. Saepe dignissimos et at error dolores asperiores. Earum id sed ratione ducimus enim voluptate praesentium.",
            ],
            [
                'name' => "UI/UX Designer",
                'icon' => "fa-paint-brush",
                'description' => "Sapiente odit ut ipsam neque dolorum et. Officiis error dicta pariatur quidem. Saepe dignissimos et at error dolores asperiores. Earum id sed ratione ducimus enim voluptate praesentium.",
            ],
        ]);
    }
}
