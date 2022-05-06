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
        Schema::create('podcast_curso', function (Blueprint $table) {
            $table->id();

            $table->foreignId('podcast_id')
            ->nullable()
            ->constrained('podcasts')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('curso_id')
            ->nullable()
            ->constrained('cursos')
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
        Schema::dropIfExists('podcast_curso');
    }
};
