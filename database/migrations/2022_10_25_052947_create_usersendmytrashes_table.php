<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_send_my_trashes', function (Blueprint $table) {
            $table->id();
            $table->string('Province_City_District_PostalCode');
            $table->string('StreetName_Building_HouseNumber');
            $table->string('Other_Details');
            $table->string('Kind');
            $table->string('Weight');
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
        Schema::dropIfExists('user_send_my_trashes');
    }
};
