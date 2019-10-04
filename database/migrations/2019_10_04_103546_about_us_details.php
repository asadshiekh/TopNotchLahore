<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AboutUsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('org_number');
            $table->string('org_email');
            $table->string('org_address');
            $table->timestamps();
        });
        $current_date = date("Y.m.d h:i:s");
        DB::table('about_us_details')->insert(
        array(
            'org_number'=>"0324 999 8787",
            'org_email'=>"info@TopNotchLahore.com",
            'org_address'=>"TopNotch, Restaurant Lahore Polo & Country Club, Eden City (Ex) Air Avenue DHA Phase 8 Lahore",
            'created_at' => $current_date
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
        Schema::dropIfExists('about_us_details');
    }
}
