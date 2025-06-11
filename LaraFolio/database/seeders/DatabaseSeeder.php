<?php

namespace Database\Seeders;
use Database\Seeders\AboutSeeder;
use Database\Seeders\MediaSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SkillSeeder;

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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
