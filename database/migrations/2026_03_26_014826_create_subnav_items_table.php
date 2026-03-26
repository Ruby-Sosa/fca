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
        Schema::create('subnav_items', function (Blueprint $table) {
           $table->id();

            // Relación con el padre
            $table->foreignId('subnav_menu_id')->constrained('subnav_menus')->onDelete('cascade');

            $table->string('nombre');
            $table->string('href')->nullable();
            $table->integer('orden')->default(0);
            $table->boolean('estatus')->default(1);
            $table->timestamps();

            // Llave foránea
            $table->foreign('subnav_menu_id')
                  ->references('id')
                  ->on('subnav_menus')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subnav_items');
    }
};
