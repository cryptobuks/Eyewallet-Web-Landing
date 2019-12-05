<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 50);
            $table->string('email', 50)->unique();
            $table->string('identificacion', 50)->unique();
            $table->string('direccion', 50);
            $table->string('pais', 20);
            $table->string('ciudad', 20);
            $table->string('postal', 10);
            $table->string('celular', 20);
            $table->integer('tipo'); // VAN A HABER 3 TIPOS DE TARJETA (CLASIC, BLACK, GOLD)
            $table->integer('estado')->default(0);
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
        Schema::dropIfExists('solicituds');
    }
}
