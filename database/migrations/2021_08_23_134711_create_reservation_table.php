<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musicalgroup_id')->constrained('musicalgroup');
            $table->foreignId('events_space_id')->constrained('events_space');

            $table->foreignId('waiters_id')->constrained('waiters');

            $table->foreignId('invitation_card_id')->constrained('invitation_card');

            $table -> date('Date');
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
        Schema::dropIfExists('reservation');
    }
}
