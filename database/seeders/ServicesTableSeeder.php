<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Service::create([
            'user_id'=> 1,
            'name' => 'Servicio de Consultoría',
            'description' => 'Consultoría profesional en TI',
            'price' => 200.00,
            'status'=> 'confirmado'
        ]);

        Service::create([
            'user_id'=> 2,
            'name' => 'Curso Online de Laravel',
            'description' => 'Curso completo de desarrollo web con Laravel',
            'price' => 150.00,
            'status'=> 'confirmado'
        ]);
    }
}
