<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AccountSeeder::class,
            CardSeeder::class,
            CpanelsSeeder::class,
            LeadSeeder::class,
            LetterSeeder::class,
            LufixSeeder::class,
            MailerSeeder::class,
            RdpsSeeder::class,
            ScriptSeeder::class,
            ShellsSeeder::class,
            SMTPSeeder::class,
            SshWhmSeeder::class,
            TutorialSeeder::class,
            WebmailSeeder::class,
        ]);
    }
}
