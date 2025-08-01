<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class USerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Gibz Hapita",
                'email' => "gibohapita@gmail.com",
                'password' => Hash::make('password'),
                'role' => "admin",
                'image' => "no-image.png",
            ],
        ]);
    }
}
