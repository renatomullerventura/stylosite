<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            ////$table->engine = 'InnoDB';
            $table->increments('idgalerias');
            $table->string('titulo');
            $table->longText('descricao')->nullable();
            $table->dateTime('data');
            $table->boolean('ativo');
            
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
        Schema::drop('galerias');
    }
}
