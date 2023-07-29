<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //define default position value
        $defaultPosition = 'Default Position';
        //create users with their respective positions
        $adminRole = Role::where('name', 'Admin')->first();
        $dataAnalystRole = Role::where('name', 'Data Analyst')->first();
        $dataEntrySpecialistRole = Role::where('name', 'Data Entry Specialist')->first();
        $qualityAssuranceAndQualityCheckerRole = Role::where('name', 'Quality Assurance and Quality Checker')->first();
        // Create other users with their respective positions
        $admin = User::create([
            'name' => 'Admin',
            'is_admin' => 1,
            'position' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $reporter = User::create([
            'name' => 'Data Analyst',
            'is_admin' => 2,
            'position' => 'Data Analyst',
            'email' => 'reporter@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $encoder = User::create([
            'name' => 'Data Entry Specialist',
            'is_admin' => 3,
            'position' => 'Data Entry Specialist',
            'email' => 'encoder@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $qaqc = User::create([
            'name' => 'Quality Assurance and Quality Checker',
            'is_admin' => 4,
            'position' => 'Quality Assurance and Quality Checker',
            'email' => 'qaqc@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        // Attach roles to users
        $admin->roles()->attach($adminRole);
        $reporter->roles()->attach($dataAnalystRole);
        $encoder->roles()->attach($dataEntrySpecialistRole);
        $qaqc->roles()->attach($qualityAssuranceAndQualityCheckerRole);

        // If you want to set a default position for existing users, you can use the update method:
        User::whereNull('position')->update(['position' => $defaultPosition]);
    }
}
