<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WebsiteLogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_logo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->timestamps();
        });

        $current_date = date("Y.m.d h:i:s");
        DB::table('website_logo')->insert(
        array(
            'logo' => 'tp1.png',
            'created_at' => $current_date,
        )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_logo');
    }
}
