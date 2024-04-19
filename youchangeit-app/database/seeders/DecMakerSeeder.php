<?php

namespace Database\Seeders;

use App\Models\Decmaker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DecmakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Decmaker::factory(10)->create();
    }
}
