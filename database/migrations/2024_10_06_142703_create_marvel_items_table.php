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
        Schema::create('marvel_items', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del ítem de Marvel
            $table->text('description'); // Descripción del ítem
            $table->decimal('price', 8, 2); // Precio del ítem
            $table->string('image_url'); // URL de la imagen del ítem
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marvel_items');
    }
};
