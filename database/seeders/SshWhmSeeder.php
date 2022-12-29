<?php

namespace Database\Seeders;

use App\Models\SshWhm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SshWhmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SshWhm::factory(20)->create();
    }
}
