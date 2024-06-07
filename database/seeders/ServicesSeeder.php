<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Badminton Court Booking - Morning',
            'slug' => 'badminton-court-booking-morning',
            'description' => 'Book a badminton court for your morning game.',
            'image' => 'badminton_court_morning.jpg',
            'price' => 75000.00,
            'notes' => 'Available from 6 AM to 12 PM.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'Enjoy a refreshing morning workout.',
            'aftercare_tips' => 'Cool down and hydrate after playing.',
            'cautions' => 'Ensure to wear proper sports attire.',
//            'duration_minutes' => 60, // Duration in minutes
            'category_id' => 1, // Replace with the actual category ID
            'is_hidden' => false,
        ]);

        Service::create([
            'name' => 'Badminton Court Booking - Afternoon',
            'slug' => 'badminton-court-booking-afternoon',
            'description' => 'Book a badminton court for your afternoon game.',
            'image' => 'badminton_court_afternoon.jpg',
            'price' => 85000.00,
            'notes' => 'Available from 12 PM to 6 PM.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'Enjoy a fun and energetic afternoon game.',
            'aftercare_tips' => 'Cool down and hydrate after playing.',
            'cautions' => 'Ensure to wear proper sports attire.',
//            'duration_minutes' => 60, // Duration in minutes
            'category_id' => 2, // Replace with the actual category ID
            'is_hidden' => false,
        ]);

        Service::create([
            'name' => 'Badminton Court Booking - Evening',
            'slug' => 'badminton-court-booking-evening',
            'description' => 'Book a badminton court for your evening game.',
            'image' => 'badminton_court_evening.jpg',
            'price' => 95000.00,
            'notes' => 'Available from 6 PM to 10 PM.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'Enjoy a relaxing evening game.',
            'aftercare_tips' => 'Cool down and hydrate after playing.',
            'cautions' => 'Ensure to wear proper sports attire.',
//            'duration_minutes' => 60, // Duration in minutes
            'category_id' => 3, // Replace with the actual category ID
            'is_hidden' => false,
        ]);

        Service::create([
            'name' => 'Badminton Court Booking - Night',
            'slug' => 'badminton-court-booking-night',
            'description' => 'Book a badminton court for your late-night game.',
            'image' => 'badminton_court_night.jpg',
            'price' => 100000.00,
            'notes' => 'Available from 10 PM to 12 AM.',
            'allergens' => null, // No allergens in this service
            'benefits' => 'Enjoy a game at your convenience at night.',
            'aftercare_tips' => 'Cool down and hydrate after playing.',
            'cautions' => 'Ensure to wear proper sports attire.',
//            'duration_minutes' => 60, // Duration in minutes
            'category_id' => 4, // Replace with the actual category ID
            'is_hidden' => false,
        ]);
    }
}
