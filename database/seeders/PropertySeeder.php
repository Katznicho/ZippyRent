<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\User;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users for property assignment
        $propertyOwners = User::where('role', 'property_owner')->get();
        $agents = User::where('role', 'agent')->get();

        // Properties for Sarah (Property Owner)
        $sarah = $propertyOwners->where('email', 'sarah@zippyrent.ug')->first();
        if ($sarah) {
            Property::create([
                'title' => 'Modern 3-Bedroom Apartment in Kololo',
                'description' => 'Beautiful modern apartment in the heart of Kololo with stunning city views. Features include granite countertops, hardwood floors, and a private balcony. Perfect for professionals working in the city center.',
                'type' => 'apartment',
                'price' => 2500000,
                'location' => 'Kololo',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1200,
                'images' => ['properties/apartment1-1.jpg', 'properties/apartment1-2.jpg', 'properties/apartment1-3.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => true,
                'is_available' => true,
                'views' => 45,
                'user_id' => $sarah->id,
            ]);

            Property::create([
                'title' => 'Luxury Villa in Nakasero',
                'description' => 'Spacious luxury villa with 5 bedrooms, private garden, and swimming pool. Located in the prestigious Nakasero area with 24/7 security. Perfect for families looking for comfort and security.',
                'type' => 'villa',
                'price' => 8000000,
                'location' => 'Nakasero',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 3000,
                'images' => ['properties/villa1-1.jpg', 'properties/villa1-2.jpg', 'properties/villa1-3.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => true,
                'is_available' => true,
                'views' => 78,
                'user_id' => $sarah->id,
            ]);
        }

        // Properties for Michael (Property Owner)
        $michael = $propertyOwners->where('email', 'michael@zippyrent.ug')->first();
        if ($michael) {
            Property::create([
                'title' => 'Cozy 2-Bedroom House in Bugolobi',
                'description' => 'Charming 2-bedroom house in a quiet neighborhood of Bugolobi. Features a small garden, parking space, and is close to shopping centers and restaurants.',
                'type' => 'house',
                'price' => 1800000,
                'location' => 'Bugolobi',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 800,
                'images' => ['properties/house1-1.jpg', 'properties/house1-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 23,
                'user_id' => $michael->id,
            ]);

            Property::create([
                'title' => 'Studio Apartment in Ntinda',
                'description' => 'Modern studio apartment perfect for young professionals. Fully furnished with modern amenities, located close to public transport and shopping areas.',
                'type' => 'studio',
                'price' => 800000,
                'location' => 'Ntinda',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 400,
                'images' => ['properties/studio1-1.jpg', 'properties/studio1-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 15,
                'user_id' => $michael->id,
            ]);
        }

        // Properties for Grace (Property Owner)
        $grace = $propertyOwners->where('email', 'grace@zippyrent.ug')->first();
        if ($grace) {
            Property::create([
                'title' => 'Executive 4-Bedroom Apartment in Nakawa',
                'description' => 'Executive apartment with 4 bedrooms, modern kitchen, and spacious living areas. Located in Nakawa with easy access to the city center and industrial area.',
                'type' => 'apartment',
                'price' => 3200000,
                'location' => 'Nakawa',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 1500,
                'images' => ['properties/apartment2-1.jpg', 'properties/apartment2-2.jpg', 'properties/apartment2-3.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => true,
                'is_available' => true,
                'views' => 67,
                'user_id' => $grace->id,
            ]);

            Property::create([
                'title' => 'Family House in Muyenga',
                'description' => 'Spacious family house with 3 bedrooms, large garden, and parking for 2 cars. Located in the peaceful Muyenga area, perfect for families with children.',
                'type' => 'house',
                'price' => 2200000,
                'location' => 'Muyenga',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1000,
                'images' => ['properties/house2-1.jpg', 'properties/house2-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 34,
                'user_id' => $grace->id,
            ]);
        }

        // Properties for David (Property Owner)
        $david = $propertyOwners->where('email', 'david@zippyrent.ug')->first();
        if ($david) {
            Property::create([
                'title' => 'Penthouse in Kampala Central',
                'description' => 'Luxury penthouse with panoramic city views, 3 bedrooms, modern amenities, and private rooftop terrace. Located in the heart of Kampala.',
                'type' => 'apartment',
                'price' => 5000000,
                'location' => 'Kampala Central',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 1800,
                'images' => ['properties/penthouse1-1.jpg', 'properties/penthouse1-2.jpg', 'properties/penthouse1-3.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => true,
                'is_available' => true,
                'views' => 89,
                'user_id' => $david->id,
            ]);

            Property::create([
                'title' => 'Compact Studio in Makerere',
                'description' => 'Affordable studio apartment near Makerere University. Perfect for students or young professionals. Includes basic furniture and utilities.',
                'type' => 'studio',
                'price' => 600000,
                'location' => 'Makerere',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 300,
                'images' => ['properties/studio2-1.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 12,
                'user_id' => $david->id,
            ]);
        }

        // Properties for Agent Peter
        $peter = $agents->where('email', 'peter@zippyrent.ug')->first();
        if ($peter) {
            Property::create([
                'title' => 'Modern 2-Bedroom Apartment in Kololo',
                'description' => 'Beautiful modern apartment with 2 bedrooms, modern kitchen, and city views. Located in the prestigious Kololo area with easy access to amenities.',
                'type' => 'apartment',
                'price' => 2000000,
                'location' => 'Kololo',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 900,
                'images' => ['properties/apartment3-1.jpg', 'properties/apartment3-2.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => false,
                'is_available' => true,
                'views' => 28,
                'user_id' => $peter->id,
            ]);

            Property::create([
                'title' => 'Luxury Villa in Nakasero',
                'description' => 'Stunning luxury villa with 4 bedrooms, private garden, and modern amenities. Perfect for executives and families looking for luxury living.',
                'type' => 'villa',
                'price' => 6000000,
                'location' => 'Nakasero',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 2500,
                'images' => ['properties/villa2-1.jpg', 'properties/villa2-2.jpg', 'properties/villa2-3.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => true,
                'is_available' => true,
                'views' => 56,
                'user_id' => $peter->id,
            ]);
        }

        // Properties for Agent Mary
        $mary = $agents->where('email', 'mary@zippyrent.ug')->first();
        if ($mary) {
            Property::create([
                'title' => 'Cozy House in Bugolobi',
                'description' => 'Charming 3-bedroom house in Bugolobi with a small garden and parking space. Perfect for families looking for a quiet neighborhood.',
                'type' => 'house',
                'price' => 1900000,
                'location' => 'Bugolobi',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 850,
                'images' => ['properties/house3-1.jpg', 'properties/house3-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 19,
                'user_id' => $mary->id,
            ]);

            Property::create([
                'title' => 'Executive Studio in Ntinda',
                'description' => 'Modern executive studio with premium finishes and modern amenities. Perfect for young professionals working in the city.',
                'type' => 'studio',
                'price' => 1000000,
                'location' => 'Ntinda',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 450,
                'images' => ['properties/studio3-1.jpg', 'properties/studio3-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 22,
                'user_id' => $mary->id,
            ]);
        }

        // Properties for Agent James
        $james = $agents->where('email', 'james@zippyrent.ug')->first();
        if ($james) {
            Property::create([
                'title' => 'Spacious Apartment in Nakawa',
                'description' => 'Large 3-bedroom apartment in Nakawa with modern amenities and easy access to the city center. Perfect for families.',
                'type' => 'apartment',
                'price' => 2400000,
                'location' => 'Nakawa',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1100,
                'images' => ['properties/apartment4-1.jpg', 'properties/apartment4-2.jpg'],
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'is_featured' => false,
                'is_available' => true,
                'views' => 31,
                'user_id' => $james->id,
            ]);
        }

        // Properties for Agent Rose
        $rose = $agents->where('email', 'rose@zippyrent.ug')->first();
        if ($rose) {
            Property::create([
                'title' => 'Modern House in Muyenga',
                'description' => 'Contemporary house with 3 bedrooms, modern kitchen, and garden. Located in the peaceful Muyenga area with good security.',
                'type' => 'house',
                'price' => 2100000,
                'location' => 'Muyenga',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 950,
                'images' => ['properties/house4-1.jpg', 'properties/house4-2.jpg'],
                'video_url' => null,
                'is_featured' => false,
                'is_available' => true,
                'views' => 26,
                'user_id' => $rose->id,
            ]);

            Property::create([
                'title' => 'Luxury Studio in Kampala Central',
                'description' => 'High-end studio apartment in the heart of Kampala with premium finishes and modern amenities. Perfect for executives.',
                'type' => 'studio',
                'price' => 1200000,
                'location' => 'Kampala Central',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 500,
                'images' => ['properties/studio4-1.jpg', 'properties/studio4-2.jpg'],
                'video_url' => null,
                'is_featured' => true,
                'is_available' => true,
                'views' => 41,
                'user_id' => $rose->id,
            ]);
        }

        $this->command->info('Properties created successfully!');
        $this->command->info('Total properties created: ' . Property::count());
        $this->command->info('Featured properties: ' . Property::where('is_featured', true)->count());
        $this->command->info('Available properties: ' . Property::where('is_available', true)->count());
    }
}