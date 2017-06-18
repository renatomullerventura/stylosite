<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_galerias', function (Blueprint $table) {
            ////$table->engine = 'InnoDB';
            $table->increments('idfotos_galerias');
            $table->string('titulo');
            $table->string('imagem_url');
            
            $table->integer('idgaleria')->unsigned();
            $table->foreign('idgaleria')->references('idgalerias')->on('galerias');
            
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
        Schema::drop('fotos_galerias');
    }
}
