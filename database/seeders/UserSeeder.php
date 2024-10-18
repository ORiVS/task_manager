<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = user::create([
            'name' => 'Orias',
            'email' => 'oriasdogbevi@gmail.com',
            'password' => Hash::make('password')
        ]);

        $user = user::create([
            'name' => 'Steven',
            'email' => 'stevenyenoussi@gmail.com',
            'password' => Hash::make('password')
        ]);

        $user = user::create([
            'name' => 'Sessime',
            'email' => 'sdogbevi@myges.com',
            'password' => Hash::make('password')
        ]);

        admin->roles()->attach([0,1]);
        user->roles()->attach([1]);
    }
}
