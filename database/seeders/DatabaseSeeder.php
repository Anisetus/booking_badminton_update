<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserRolesEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // run location seeder
        $this->call([
            LocationSeeder::class,
        ]);

        $userroles = [
            [
                'id' => UserRolesEnum::Customer,
                'name' => 'Customer',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Employee,
                'name' => 'Employee',
                'status' => true,
            ],
            [
                'id' => UserRolesEnum::Admin,
                'name' => 'Admin',
                'status' => true,
            ]

        ];

        foreach ($userroles as $role) {
            \App\Models\Role::create($role);
        }

        // Create admin user
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'phone_number' => '1234569990',
            'role_id' => UserRolesEnum::Admin,
        ]);

        // create mock customers
        \App\Models\User::create([
            'name' => '',
            'email' => 'anisetusm@gmail.com',
            'password' => Hash::make('anisetus'),
            'phone_number' => '082276735592',
            'role_id' => UserRolesEnum::Customer,
        ]);

        // create mock employees
        \App\Models\User::create([
            'name' => 'manalu',
            'email' => 'manalu@gmail.com',
            'password' => Hash::make('manalu'),
            'phone_number' => '1234567899',
            'role_id' => UserRolesEnum::Employee,
        ]);

        // categories Skin, Makeup, Nails, Hair
        \App\Models\Category::create([
            'name' => 'lapangan1',
        ]);

        \App\Models\Category::create([
            'name' => 'lapangan2',
        ]);

        \App\Models\Category::create([
            'name' => 'lapangan3',
        ]);

        \App\Models\Category::create([
            'name' => 'lapangan4',
        ]);

        $this->call([
            ServicesSeeder::class,
            TimeSlotSeeder::class,
        ]);


    }
}
