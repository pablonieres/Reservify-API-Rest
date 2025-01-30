<?php

namespace Database\Seeders;

use App\Models\TransactionLog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionLog::create([
            'user_id' => 1,
            'payment_id' => 1,
            'transaction_type' => 'credito',
            'amount' => 200.00,
            'transaction_date' => now(),
        ]);
    }
}
