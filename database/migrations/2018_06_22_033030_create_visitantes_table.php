<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->time('entrada');
            $table->time('salida')->nullable();
            $table->enum('estado',['IN','OUT'])->default('IN');
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            //Relaciones

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitantes');
    }
}
