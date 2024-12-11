<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 15001; $i < 50000; $i++) {
            \App\Models\Plan::create([
                'name' => 'Plan ' . $i,
                'price' => random_int(18, 999),
            ]);
        }
    }
}
