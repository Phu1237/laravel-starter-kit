<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin account
        $this->command->info("Create Administrator account");
        $name = $this->command->ask('- Name', 'Admin');
        $email = $this->command->ask('- Email', 'admin@example.org');
        $password = $this->command->ask('- Password', 1234567);
        User::factory()->create([
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => bcrypt($password),
        ]);
        $this->command->info("Login information: $email|$password.");
        // Create random user account(s)
        $count = (int) $this->command->ask('How many demo account(s) do you want to create?', 0);
        User::factory()->count($count)->create();
        $this->command->info('You can now login demo user account(s) with default login password: password');
    }
}
