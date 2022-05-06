<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',50);
            $table->date('fecha');
            $table->string('enlace_ruta');
            $table->string('cod_archivo',50);
            $table->string('enlace_guion');
            $table->string('duracion',10);
            $table->string('descripcion')->nullable();

            $table->foreignId('estructura_id')
            ->nullable()
            ->constrained('estructuras')
            ->cascadeOnDelete()
            ->nullOnDelete();


            $table->foreignId('experto_id')
            ->nullable()
            ->constrained('expertos')
            ->cascadeOnDelete()
            ->nullOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
};
