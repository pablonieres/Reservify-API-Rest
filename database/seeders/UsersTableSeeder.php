<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan Peréz',
            'email' => 'juan@example.com',
            'password' =>Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Ana Gómez',
            'email' => 'ana@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
