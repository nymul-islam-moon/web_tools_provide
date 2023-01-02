<?php

namespace Database\Seeders;

use App\Models\SshWhms;
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
        SshWhms::factory(20)->create();
    }
}
