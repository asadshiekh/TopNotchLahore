<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_menu_item', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_des');
            $table->string('item_type');
            $table->string('item_discount')->default('null');
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
        Schema::dropIfExists('add_menu_item');
    }
}
