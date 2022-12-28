<?php

namespace Database\Seeders;

use App\Models\Lufix;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LufixSeeder extends Seeder
{

    public function run()
    {
        Lufix::factory(20)->create();
    }
}
