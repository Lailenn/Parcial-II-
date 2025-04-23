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
        Schema::create('coincidencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('objeto_perdido_id');
            $table->unsignedBigInteger('objeto_encontrado_id');
            $table->string('estado_validación')->nullable();
            $table->date('fecha_validación')->nullable();
            $table->timestamps();

            $table->foreign('objeto_perdido_id')->references('id')->on('objetos')->onDelete('cascade');
            $table->foreign('objeto_encontrado_id')->references('id')->on('objetos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coincidencias');
    }
};
