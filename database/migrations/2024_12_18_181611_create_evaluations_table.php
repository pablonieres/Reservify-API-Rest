<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relación con users
            $table->foreignId('appointment_id')->constrained()->onDelete('cascade'); // Relación con appointments
            $table->integer('rating'); // Calificación (1-5)
            $table->text('feedback'); // Comentarios
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
