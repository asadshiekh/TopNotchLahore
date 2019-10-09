<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservation_order', function (Blueprint $table) {
            $table->increments('res_id');
            $table->string('person_name');
            $table->string('person_email');
            $table->string('person_phone');
            $table->string('res_date');
            $table->string('res_time');
            $table->string('res_persons');
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
        Schema::dropIfExists('Reservation_order');
    }
}
