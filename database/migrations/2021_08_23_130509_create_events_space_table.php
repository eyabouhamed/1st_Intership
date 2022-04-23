<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsSpaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_space', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('Name_Space');
            $table->string('Place');
            $table->integer('Capacity');
            $table->String('Owner_Name');
            $table->String('Owner_Phone');
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
        Schema::dropIfExists('events_space');
    }
}
