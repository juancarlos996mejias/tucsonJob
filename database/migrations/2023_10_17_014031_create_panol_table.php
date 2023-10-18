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
        Schema::create('panol', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('articulo');
            $table->integer('cantidad');
            $table->string('fecha ingreso');
            $table->string('fecha salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panol');
    }
};
