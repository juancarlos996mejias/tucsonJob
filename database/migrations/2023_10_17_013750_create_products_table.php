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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('articulo');
            $table->string('lote');
            $table->string('marca');
            $table->integer('stock total');
            $table->integer('talar');
            $table->integer('outlet');
            $table->integer('quilmes');
            $table->integer('preparacion');
            $table->integer('ciclico');
            $table->integer('marmoleria deposito');
            $table->integer('marmoleria fabrica');
            $table->integer('ext mepano');
            $table->integer('parq ind pilar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
