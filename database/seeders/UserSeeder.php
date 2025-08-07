<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 10; $i++) {
            User::updateOrCreate(
                [
                'email' => 'user' . $i . '@gmail.com',
                ],
                [
                'name' => 'User ' . $i,   
                'password' => Hash::make('password'),


                ]
            );
        } 
    }
}
