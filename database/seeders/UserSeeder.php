<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin Users
        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'admin@zippyrent.ug',
            'phone' => '+256759983853',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'John Admin',
            'username' => 'johnadmin',
            'email' => 'john.admin@zippyrent.ug',
            'phone' => '+256759983854',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // Property Owners
        User::create([
            'name' => 'Sarah Property Owner',
            'username' => 'sarahowner',
            'email' => 'sarah@zippyrent.ug',
            'phone' => '+256759983855',
            'role' => 'property_owner',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Michael Landlord',
            'username' => 'michaellandlord',
            'email' => 'michael@zippyrent.ug',
            'phone' => '+256759983856',
            'role' => 'property_owner',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Grace Property Manager',
            'username' => 'gracemanager',
            'email' => 'grace@zippyrent.ug',
            'phone' => '+256759983857',
            'role' => 'property_owner',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'David Estate Owner',
            'username' => 'davidestate',
            'email' => 'david@zippyrent.ug',
            'phone' => '+256759983858',
            'role' => 'property_owner',
            'password' => Hash::make('password'),
        ]);

        // Property Agents
        User::create([
            'name' => 'Agent Peter',
            'username' => 'agentpeter',
            'email' => 'peter@zippyrent.ug',
            'phone' => '+256759983859',
            'role' => 'agent',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Agent Mary',
            'username' => 'agentmary',
            'email' => 'mary@zippyrent.ug',
            'phone' => '+256759983860',
            'role' => 'agent',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Agent James',
            'username' => 'agentjames',
            'email' => 'james@zippyrent.ug',
            'phone' => '+256759983861',
            'role' => 'agent',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Agent Rose',
            'username' => 'agentrose',
            'email' => 'rose@zippyrent.ug',
            'phone' => '+256759983862',
            'role' => 'agent',
            'password' => Hash::make('password'),
        ]);

        // Regular Users
        User::create([
            'name' => 'Regular User',
            'username' => 'regularuser',
            'email' => 'user@zippyrent.ug',
            'phone' => '+256759983863',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@zippyrent.ug',
            'phone' => '+256759983864',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);

        $this->command->info('Users created successfully!');
        $this->command->info('Admin Users:');
        $this->command->info('- admin@zippyrent.ug / password');
        $this->command->info('- john.admin@zippyrent.ug / password');
        $this->command->info('');
        $this->command->info('Property Owners:');
        $this->command->info('- sarah@zippyrent.ug / password');
        $this->command->info('- michael@zippyrent.ug / password');
        $this->command->info('- grace@zippyrent.ug / password');
        $this->command->info('- david@zippyrent.ug / password');
        $this->command->info('');
        $this->command->info('Property Agents:');
        $this->command->info('- peter@zippyrent.ug / password');
        $this->command->info('- mary@zippyrent.ug / password');
        $this->command->info('- james@zippyrent.ug / password');
        $this->command->info('- rose@zippyrent.ug / password');
        $this->command->info('');
        $this->command->info('Regular Users:');
        $this->command->info('- user@zippyrent.ug / password');
        $this->command->info('- test@zippyrent.ug / password');
    }
}


