<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <50; $i ++)
        {
            DB::table('people')->insert([
                'Name' => Str::random(10),
                'Lastname' => Str::random(10),
                'Phone' => rand(100000000, 999999999),
                'Street' => Str::random(7),
                'City' => Str::random(10),
                'Country' => Str::random(10),
                'Friends' => rand(1, 99)
            ]);
        }
    }
}
