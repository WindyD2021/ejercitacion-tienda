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
        Schema::create('best_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del bestseller
            $table->text('description'); // Descripción del bestseller
            $table->decimal('price', 8, 2); // Precio del bestseller
            $table->string('image_url'); // URL de la imagen del bestseller
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('best_sellers');
    }
};
