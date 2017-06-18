<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequentadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequentadores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idfrequentadores');
            $table->string('nome', 126);
            $table->string('sobrenome', 126)->nullable();
            $table->string('apelido', 126)->nullable();
            $table->string('email')->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->string('sexo');
            $table->boolean('ativo');
            $table->string('fotoperfil')->nullable();
            
            //FOREIGN KEYS
            $table->integer('idtelefone')->unsigned();
            $table->foreign('idtelefone')->references('idtelefones')->on('telefones')->onDelete('cascade');
            
            $table->integer('idendereco')->unsigned();
            $table->foreign('idendereco')->references('idenderecos')->on('enderecos')->onDelete('cascade');
            
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
        Schema::drop('frequentadores');
    }
}
