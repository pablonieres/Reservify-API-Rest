<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación con el usuario
            $table->foreignId('service_id')->constrained()->onDelete('cascade'); // Relación con el producto/servicio
            $table->timestamp('reservation_date');
            $table->string('location');
            $table->string('time');
            $table->enum('status',['pendiente','pospuesta','cancelada']); // Estado de la reserva (pendiente, confirmada, cancelada, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
