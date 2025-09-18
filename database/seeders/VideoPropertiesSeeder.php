<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create a user
        $user = User::first();
        if (!$user) {
            $user = User::create([
                'name' => 'Video Property Owner',
                'username' => 'videopropertyowner',
                'email' => 'video@zippyrent.com',
                'phone' => '+256759983854',
                'role' => 'property_owner',
                'password' => bcrypt('password'),
            ]);
        }

        // Additional properties with YouTube videos
        $videoProperties = [
            [
                'title' => 'Luxury Apartment with Balcony',
                'description' => 'Stunning luxury apartment featuring a private balcony with panoramic city views. Modern open-plan design with premium finishes throughout. Perfect for professionals seeking comfort and style.',
                'type' => 'apartment',
                'price' => 1800000,
                'location' => 'Kololo',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 1400,
                'video_url' => 'https://www.youtube.com/watch?v=3JZ_D3ELwOQ',
                'is_featured' => true,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Contemporary House with Garden',
                'description' => 'Beautiful contemporary house featuring a well-maintained garden and modern amenities. Spacious interiors with natural light throughout. Ideal for families looking for comfort and space.',
                'type' => 'house',
                'price' => 2200000,
                'location' => 'Muyenga',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 2400,
                'video_url' => 'https://youtu.be/ScMzIvxBSi4',
                'is_featured' => true,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Executive Studio Apartment',
                'description' => 'High-end studio apartment designed for executive living. Features premium finishes, modern appliances, and a dedicated workspace. Located in a prestigious building with excellent amenities.',
                'type' => 'studio',
                'price' => 800000,
                'location' => 'Nakasero',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 700,
                'video_url' => 'https://www.youtube.com/watch?v=2vjPBrBU-TM',
                'is_featured' => false,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Modern Villa with Swimming Pool',
                'description' => 'Exquisite modern villa featuring a private swimming pool, landscaped garden, and premium outdoor entertainment area. Perfect for luxury living with family and friends.',
                'type' => 'villa',
                'price' => 3500000,
                'location' => 'Kololo',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 3200,
                'video_url' => 'https://youtu.be/9bZkp7q19f0',
                'is_featured' => true,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Cozy 2-Bedroom Apartment',
                'description' => 'Charming 2-bedroom apartment in a quiet residential area. Features a cozy living space, modern kitchen, and comfortable bedrooms. Perfect for small families or couples.',
                'type' => 'apartment',
                'price' => 950000,
                'location' => 'Ntinda',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 1100,
                'video_url' => 'https://www.youtube.com/watch?v=YQHsXMglC9A',
                'is_featured' => false,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Student-Friendly Studio',
                'description' => 'Affordable studio apartment designed specifically for students. Features a study area, compact kitchen, and comfortable sleeping space. Located near university campuses.',
                'type' => 'studio',
                'price' => 400000,
                'location' => 'Makerere',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 350,
                'video_url' => 'https://youtu.be/kJQP7kiw5Fk',
                'is_featured' => false,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Luxury Penthouse Suite',
                'description' => 'Exclusive penthouse suite with breathtaking city views. Features floor-to-ceiling windows, premium finishes, and exclusive amenities. The ultimate in luxury living.',
                'type' => 'apartment',
                'price' => 4500000,
                'location' => 'Nakasero',
                'bedrooms' => 4,
                'bathrooms' => 4,
                'area' => 2800,
                'video_url' => 'https://www.youtube.com/watch?v=JGwWNGJdvx8',
                'is_featured' => true,
                'is_available' => true,
                'user_id' => $user->id,
            ],
            [
                'title' => 'Family Home with Large Garden',
                'description' => 'Spacious family home featuring a large garden perfect for children to play. Modern kitchen, comfortable living areas, and plenty of storage space. Great for growing families.',
                'type' => 'house',
                'price' => 1800000,
                'location' => 'Muyenga',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 2100,
                'video_url' => 'https://youtu.be/L_jWHffIx5E',
                'is_featured' => true,
                'is_available' => true,
                'user_id' => $user->id,
            ],
        ];

        foreach ($videoProperties as $propertyData) {
            Property::create($propertyData);
        }
    }
}


