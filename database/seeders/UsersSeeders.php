<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; //генерация случайных строк

class UsersSeeders extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(5),
                'email' => Str::random(5) . '@gmail.com',
                'age' => mt_rand(1, 100),
                'salary' => mt_rand(1000, 10000),
                'login' => Str::random(5),
                'password' => Str::random(10),
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
