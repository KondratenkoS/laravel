<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfilesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'name' => Str::random(5),
                'surname' => Str::random(7),
                'email' => Str::random(5) . '@gmail.com',
                'user_id' => mt_rand(1, 99)
            ],

        ]);
    }
}
