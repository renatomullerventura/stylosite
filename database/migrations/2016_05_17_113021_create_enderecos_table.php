<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            ////$table->engine = 'InnoDB';
            $table->increments('idenderecos');
            $table->string('logradouro', 10);
            $table->string('endereco', 256);
            $table->string('numero', 7);
            $table->string('complemento', 128);
            $table->string('bairro', 128);
            $table->string('cep', 8);
            $table->string('cidade', 128);
            $table->string('estado', 128);
            $table->string('pais', 128);
            $table->string('latitude', 128)->nullable();
            $table->string('longitude', 128)->nullable();
            
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
        Schema::drop('enderecos');
    }
}
