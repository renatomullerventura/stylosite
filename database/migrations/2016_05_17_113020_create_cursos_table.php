<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idcursos');
            
            $table->string('nome', 128);
            $table->longText('descricao')->nullable();
            $table->string('dificuldade', 128);
            $table->boolean('ativo');
            
            $table->date('data_inicio');
            $table->date('data_termino')->nullable();
            
            $table->integer('idritmo')->unsigned();
            $table->foreign('idritmo')->references('idritmos')->on('ritmos');
            
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
        Schema::drop('cursos');
    }
}
