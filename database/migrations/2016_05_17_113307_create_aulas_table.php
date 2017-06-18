<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idaulas');
            $table->integer('dia_semana')->comment('0-Domingo, 1-Segunda feira..');
            $table->integer('sala');
            
            $table->time('horario_inicial_previsao');
            $table->time('horario_final_previsao');
            
            $table->integer('idcurso')->unsigned();
            $table->foreign('idcurso')->references('idcursos')->on('cursos');
            
            $table->integer('idprofessor')->unsigned()->nullable();
            $table->foreign('idprofessor')->references('idprofessores')->on('professores');
            
            $table->integer('idprofessora')->unsigned()->nullable();
            $table->foreign('idprofessora')->references('idprofessores')->on('professores');
            
            $table->softDeletes();
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
        Schema::drop('aulas');
    }
}
