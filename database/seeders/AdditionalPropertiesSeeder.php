<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\User;

class AdditionalPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create a property owner
        $user = User::where('role', 'property_owner')->first();
        if (!$user) {
            $user = User::create([
                'name' => 'John Property Owner',
                'username' => 'johnowner',
                'email' => 'john@zippyrent.com',
                'phone' => '+256700123456',
                'role' => 'property_owner',
                'password' => bcrypt('password'),
            ]);
        }

        $properties = [
            [
                'title' => 'Spacious Family House in Ntinda',
                'description' => 'Beautiful 4-bedroom family house with a large garden, perfect for families. Located in the quiet neighborhood of Ntinda with easy access to schools and shopping centers.',
                'type' => 'house',
                'price' => 1800000,
                'location' => 'Ntinda, Kampala',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 2000,
                'is_featured' => true,
                'is_available' => true,
                'views' => 45,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Modern Studio in Kololo',
                'description' => 'Fully furnished studio apartment in the heart of Kololo. Perfect for young professionals working in the city center. Includes all utilities and high-speed internet.',
                'type' => 'studio',
                'price' => 800000,
                'location' => 'Kololo, Kampala',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 500,
                'is_featured' => false,
                'is_available' => true,
                'views' => 23,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Luxury Villa in Munyonyo',
                'description' => 'Exclusive 5-bedroom villa with private pool, garden, and lake views. Premium finishes throughout with modern amenities. Perfect for executives and large families.',
                'type' => 'villa',
                'price' => 3500000,
                'location' => 'Munyonyo, Kampala',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 3000,
                'is_featured' => true,
                'is_available' => true,
                'views' => 67,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Cozy Apartment in Nakawa',
                'description' => '2-bedroom apartment in a secure compound with 24/7 security. Close to industrial area and major transport routes. Ideal for working professionals.',
                'type' => 'apartment',
                'price' => 950000,
                'location' => 'Nakawa, Kampala',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 900,
                'is_featured' => false,
                'is_available' => true,
                'views' => 34,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Student-Friendly House in Makerere',
                'description' => '3-bedroom house near Makerere University. Perfect for students or young professionals. Includes study area and high-speed internet.',
                'type' => 'house',
                'price' => 750000,
                'location' => 'Makerere, Kampala',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1200,
                'is_featured' => false,
                'is_available' => true,
                'views' => 89,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Penthouse with City Views',
                'description' => 'Luxurious penthouse apartment with panoramic city views. Modern design with premium amenities including gym access and concierge services.',
                'type' => 'apartment',
                'price' => 2800000,
                'location' => 'Kampala Central',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 1800,
                'is_featured' => true,
                'is_available' => false, // This one is unavailable for testing
                'views' => 156,
                'user_id' => $user->id,
            ],
        ];

        foreach ($properties as $propertyData) {
            Property::create($propertyData);
        }

        $this->command->info('Additional properties created successfully!');
    }
}