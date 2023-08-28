<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Continent::create([
            'continent' => 'Europe'
        ]);

        Continent::create([
            'continent' => 'Asia'
        ]);

        Continent::create([
            'continent' => 'Africa'
        ]);

        Continent::create([
            'continent' => 'South America'
        ]);
    }
}
