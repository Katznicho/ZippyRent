<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@zippyrent.ug',
            'phone' => '+256759983853',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // Create property owner user
        User::create([
            'name' => 'Property Owner',
            'username' => 'propertyowner',
            'email' => 'owner@zippyrent.ug',
            'phone' => '+256759983854',
            'role' => 'property_owner',
            'password' => Hash::make('password'),
        ]);

        // Create agent user
        User::create([
            'name' => 'Property Agent',
            'username' => 'agent',
            'email' => 'agent@zippyrent.ug',
            'phone' => '+256759983855',
            'role' => 'agent',
            'password' => Hash::make('password'),
        ]);

        $this->command->info('Demo users created successfully!');
        $this->command->info('Admin - Email: admin@zippyrent.ug | Password: password');
        $this->command->info('Property Owner - Email: owner@zippyrent.ug | Password: password');
        $this->command->info('Agent - Email: agent@zippyrent.ug | Password: password');
    }
}