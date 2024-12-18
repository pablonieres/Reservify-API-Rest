<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'status' => $this->faker->randomElement(['Confirmada', 'Pendiente', 'Cancelada']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
