<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            
            $table->id();
            $table->string("estudiante");
            $table->string("representante");
            $table->string("s_matricula");
            $table->string("s_seguro");
            $table->string("s_ambiente_virtual");
            $table->string("s_p1");
            $table->string("s_p2");
            $table->string("s_p3");
            $table->string("s_p4");
            $table->string("s_p5");
            $table->string("s_p6");
            $table->string("s_p7");
            $table->string("s_p8");
            $table->string("s_p9");
            $table->string("s_p10");
            $table->string("estado");
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
        Schema::dropIfExists('cuentas');
    }
}
