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
        Schema::create('usertrackings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('Datapengirim_ID');
            $table->dateTime('Estimated_Delivery');
            $table->string('Shipping_By');
            $table->enum('Status', ['Confirmed', 'Picking Up', 'On Process', 'Done']);
            $table->string('Description');
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
        Schema::dropIfExists('usertrackings');
    }
};
