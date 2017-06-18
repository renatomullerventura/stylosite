<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            ////$table->engine = 'InnoDB';
            $table->increments('idtelefones');
            $table->string('cod_pais', 3)->nullable();
            $table->string('cod_area', 3);
            $table->string('ramal', 10);
            $table->string('telefone', 10);
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
        Schema::drop('telefones');
    }
}
