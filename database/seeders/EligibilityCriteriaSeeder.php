<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EligibilityCriteria;

class EligibilityCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15000; $i++) {
            \App\Models\EligibilityCriteria::create([
                'name' => 'Criteria ' . $i,
                'age_less_than' => random_int(18, 65),
                'age_greater_than' => random_int(1, 17),
                'last_login_days_ago' => random_int(1, 365),
                'income_less_than' => random_int(50000, 100000),
                'income_greater_than' => random_int(1000, 49999),
            ]);
        }
    }
}
