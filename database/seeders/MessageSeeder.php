<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'name' => "John Doe",
                'email' => "johndoe@gmail.com",
                'subject' => "Hello",
                'description' => "Hello World",
                'status' => false,
            ],
            [
                'name' => "Jane Doe",
                'email' => "janedoe@gmail.com",
                'subject' => "Hello",
                'description' => "Hello World",
                'status' => false,
            ],
        ]);
    }
}
