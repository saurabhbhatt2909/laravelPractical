<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\ComboPlan;

class ComboPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15000; $i++) {
            \App\Models\ComboPlan::create([
                'name' => 'Combo Plan ' . $i,
                'price' => random_int(100, 1000),
                'related_plans' => json_encode(Plan::inRandomOrder()->take(3)->pluck('id')->toArray()),
            ]);
        }
    }
}
