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
        Schema::create('movimentacao', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->date('data_movimentacao');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_tipo_movimentacao');
            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tipo_movimentacao')->references('id')->on('tipo_movimentacao')->onDelete('cascade');
            $table->foreign('id_produto')->references('id')->on('produto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacao');
    }
};
