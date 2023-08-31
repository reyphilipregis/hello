<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loadMessages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'message' => "Hello",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "Hi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "Good day!",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "Greetings!",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "Welcome",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "You are awesome",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "Howdy!",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'message' => "You are blessed",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('messages')->insert($messages);
    }
}
