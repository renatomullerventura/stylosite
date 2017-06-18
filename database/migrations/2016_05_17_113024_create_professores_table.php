<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idprofessores');
            $table->string('nome', 128);
            $table->string('sobrenome', 128)->nullable();
            $table->string('apelido', 128)->nullable();
            $table->string('email')->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->string('sexo');
            $table->longText('descricao')->nullable();
            $table->boolean('ativo');
            $table->string('fotoperfil')->nullable();
            
            //FOREIGN KEYS
            $table->integer('idtelefone')->unsigned()->nullable();
            $table->foreign('idtelefone')->references('idtelefones')->on('telefones')->onDelete('cascade');
            
            $table->integer('idendereco')->unsigned()->nullable();
            $table->foreign('idendereco')->references('idenderecos')->on('enderecos')->onDelete('cascade');
            
            $table->integer('idescola')->unsigned();
            $table->foreign('idescola')->references('idescolas')->on('escolas');
            
            $table->integer('idparceiro')->unsigned()->nullable();
            $table->foreign('idparceiro')->references('idprofessores')->on('professores');
            
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
        Schema::drop('professores');
    }
}
