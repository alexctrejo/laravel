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
        Schema::create('citas', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('nombre', 100);
            $table->string('correo', 100);
            $table->string('carrera', 100);
            $table->string('numerocontrol', 100);
            $table->string('fecha', 100);

            // Añade la columna user_id
            $table->foreignId('user_id')->constrained()->unsigned(); // Agregado ->unsigned()

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
