<?php

namespace Database\Seeders;

use App\Models\Profile;
use Database\Seeders\UsersSeeders;
use Database\Seeders\PostsSeeders;
use Database\Seeders\ProfilesSeeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; //генерация случайных строк
use Illuminate\Support\Facades\Hash; //для хеширования паролей

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeders::class,
            PostsSeeders::class,
            ProfilesSeeders::class,
        ]);

//         \App\Models\User::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}
