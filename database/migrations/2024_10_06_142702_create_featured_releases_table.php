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
        Schema::create('featured_releases', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del lanzamiento destacado
            $table->text('description'); // Descripción del lanzamiento
            $table->date('release_date'); // Fecha de lanzamiento
            $table->string('image_url'); // URL de la imagen del lanzamiento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_releases');
    }
};
