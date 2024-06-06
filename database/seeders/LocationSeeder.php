<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        Location::create([
            'name' => 'Location 1',
            'address' => 'laguboti',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'Location 2',
            'address' => 'balige ',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'Location 3',
            'address' => 'Address ',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'Location 4',
            'address' => 'sitoluama ',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);
    }
}
