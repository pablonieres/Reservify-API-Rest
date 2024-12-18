<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    public function definition()
    {
        return [
            'reservation_id' => Reservation::inRandomOrder()->first()->id ?? Reservation::factory(),
            'date' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'time' => $this->faker->time('H:i:s'),
            'location' => $this->faker->address,
            'status' => $this->faker->randomElement(['Programada', 'Realizada', 'Cancelada']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
