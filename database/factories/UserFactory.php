<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' =>Hash::make('password'), // Contraseña por defecto
            'role_id' => Role::inRandomOrder()->first()->id ?? Role::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
