<?php

namespace Database\Seeders;
use Database\Seeders\AboutSeeder;
use Database\Seeders\MediaSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\MessageSeeder;
use Database\Seeders\USerSeeder;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AboutSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(USerSeeder::class);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
