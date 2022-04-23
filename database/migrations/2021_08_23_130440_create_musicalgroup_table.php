<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicalgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicalgroup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name_Group');
            $table->string('Style');
            $table->integer('Nb_pers');
            $table->string('Resp_Name');
            $table->String('Resp_Phone');
            $table->float('Price');
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
        Schema::dropIfExists('musicalgroup');
    }
}
