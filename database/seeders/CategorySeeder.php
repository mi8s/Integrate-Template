<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use faker\Factory as Faker;

class CategorySeeder extends Seeder
/**
     * Run the database seeds.
     */
{
    public function run(): void
    {
        // $faker = Faker::create();

        // foreach (range(1, 10) as $i) {
        //     DB::table('categories')->insert([
        //         'name' => $faker->word, // atau $faker->unique()->word untuk tanpa duplikat
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
