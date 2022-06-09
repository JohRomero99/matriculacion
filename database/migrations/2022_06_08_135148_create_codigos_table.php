<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos', function (Blueprint $table) {
            $table->id();
            $table->string('estudiante');
            $table->string('representante');
            $table->string('codigo');
            $table->string('estado');

            // $table->foreign('estudiante')
            //     ->references('id')
            //     ->on('estudiantes')
            //     ->onDelete('cascade');
            // $table->foreign('representante')
            //     ->references('id')
            //     ->on('representantes')
            //     ->onDelete('cascade');

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
        Schema::dropIfExists('codigos');
    }
}
