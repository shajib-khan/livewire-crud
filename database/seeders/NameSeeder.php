<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function definition(): array
    {
        return [
            "name"=> "$this->faker->sentence (20)",

        ];
    }

}
