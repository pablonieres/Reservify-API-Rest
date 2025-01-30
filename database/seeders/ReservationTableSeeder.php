<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        // Usando una fecha y hora personalizadas
        $customDate = Carbon::create(2025, 11, 1)->toDateString(); // Fecha personalizada (YYYY-MM-DD)
        $customTime = Carbon::create(2025, 11, 1, 10, 30)->toTimeString(); // Hora personalizada (HH:MM:SS)

        Reservation::create([
            'user_id' => 1,
            'service_id' => 1,
            'date_field' =>  $customDate,
            'location' => 'Senac',
            'time_field'  => $customTime,
            'status' => 'pendiente',
        ]);

        $customDate = Carbon::create(2025, 12, 10)->toDateString(); // Fecha personalizada (YYYY-MM-DD)
        $customTime = Carbon::create(2025, 12, 10, 10, 30)->toTimeString(); // Hora personalizada (HH:MM:SS)


        Reservation::create([
            'user_id' => 2,
            'service_id' => 2,
            'date_field' =>  $customDate,
            'location' => 'Senac',
            'time_field'  => $customTime,
            'status' => 'pendiente',
        ]);
    }
}
