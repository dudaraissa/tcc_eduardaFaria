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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->string('descricao', 60);
            $table->string('imagem');
            $table->decimal('preco', 8, 2);
            $table->integer('total_estoque');
            $table->string('cod_barras', 45);
            $table->unsignedBigInteger('id_fornecedor');
            $table->timestamps();

            $table->foreign('id_fornecedor')->references('id')->on('fornecedor')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
