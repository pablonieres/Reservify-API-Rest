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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained()->onDelete('cascade'); // Relación con la reserva
            $table->decimal('amount', 8, 2); // Monto pagado
            $table->string('payment_method'); // Método de pago (tarjeta, PayPal, etc.)
            $table->timestamp('payment_date');
            $table->string('status'); // Estado del pago (completado, pendiente, fallido, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
