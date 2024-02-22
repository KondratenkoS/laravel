<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; //генерация случайных строк

class PostsSeeders extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => Str::random(6),
                'slug' => Str::random(6) . '_' . Str::random(4),
                'likes' => mt_rand(1, 1000),
                'created_at' => date('y-m-d-H-i-s'),
                'updated_at' => date('y-m-d-H-i-s'),
            ],

        ]);

//         \App\Models\User::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }

}
