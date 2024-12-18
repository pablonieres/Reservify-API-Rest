<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'appointment_id' => Appointment::inRandomOrder()->first()->id ?? Appointment::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'feedback' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
