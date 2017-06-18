<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_galerias', function (Blueprint $table) {
            ////$table->engine = 'InnoDB';
            $table->increments('idvideos_galerias');
            $table->string('titulo', 512);
            $table->string('descricao', 512)->nullable();
            $table->string('youtube_url', 512);
            
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
        Schema::drop('videos_galerias');
    }
}
