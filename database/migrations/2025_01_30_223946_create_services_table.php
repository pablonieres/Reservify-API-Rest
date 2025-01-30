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
        Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('user_id');
        $table->string('name'); // Nombre del servicio
        $table->text('description')->nullable(); // Descripción del producto o servicio
        $table->decimal('price', 8, 2); // Precio del producto/servicio
        $table->enum('status',['confirmado','pospuesta','cancelada']); // Estado de la reserva (pendiente, confirmada, cancelada, etc.)
           
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
