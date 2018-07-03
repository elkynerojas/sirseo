<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('documento');
            $table->date('fecha_entrada')->nullable();
            $table->time('hora_entrada')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->time('hora_salida')->nullable();
            $table->integer('tipo_elemento_id')->unsigned()->index();
            $table->string('marca');
            $table->string('serial');
            $table->enum('tipo_propiedad',['INVENTARIO','AJENO']);
            $table->longText('detalles')->nullable();
            $table->enum('estado',['IN','OUT']);
            $table->integer('user_id')->unsigned()->index();
            $table->integer('puesto_id')->unsigned()->index();
            $table->timestamps();

            //Relaciones

            $table->foreign('tipo_elemento_id')->references('id')->on('tipos_elemento')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('puesto_id')->references('id')->on('puestos')
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
        Schema::dropIfExists('elementos');
    }
}
