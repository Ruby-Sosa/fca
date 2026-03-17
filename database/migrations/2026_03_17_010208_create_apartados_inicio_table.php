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
        Schema::create('apartados_inicio', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titulo');
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('imagen');
            $table->string('enlace')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartados_inicio');
    }
};
