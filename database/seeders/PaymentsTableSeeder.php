<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'reservation_id' => 1,
            'amount' => 200.00,
            'payment_method' => 'tarjeta',
            'payment_date' => now(),
            'status' => 'completado',
        ]);

        Payment::create([
            'reservation_id' => 2,
            'amount' => 150.00,
            'payment_method' => 'paypal',
            'payment_date' => now(),
            'status' => 'pendiente',
        ]);
    }
}
