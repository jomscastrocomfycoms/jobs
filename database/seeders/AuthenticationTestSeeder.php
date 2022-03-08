<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AuthenticationTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User Seeder
        $coreAdmin = \App\Models\User::create([
            'email' => 'core_admin@comfycommunications.com',
            'password' => Hash::make('core_admin@comfycommunications.com'),
            'name' => 'Core Admin',
        ]);


    }
}
