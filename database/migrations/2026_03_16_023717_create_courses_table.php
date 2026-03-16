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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo'); // taller, curso, seminario
            $table->string('categoria'); // infantil, adulto
            $table->string('version')->nullable();
            $table->string('turno')->nullable();
            $table->integer('cupo')->nullable();
            $table->boolean('requiere_aprobacion')->default(0);
            $table->tinyInteger('estado')->default(1); // auditoria
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
