<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    public function run()
    {
        Plant::factory(30)->create();
    }
}

