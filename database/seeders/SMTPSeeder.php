<?php

namespace Database\Seeders;

use App\Models\SMTP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SMTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SMTP::factory(20)->create();
    }
}
