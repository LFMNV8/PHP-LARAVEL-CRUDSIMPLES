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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id('id_jogo');
            $table->string('titulo',250)->unique()->nullable(false);
            $table->string('genero',100)->nullable(false);
            $table->string('plataforma', 100)->nullable(false);
            $table->date('data_lancamento')->nullable(false);
            $table->string('desenvolvedora',250)->nullable(false);
           
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
