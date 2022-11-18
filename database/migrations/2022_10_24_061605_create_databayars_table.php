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
        Schema::create('databayars', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->date("tgl_pembayaran");
            $table->boolean("jenis_bayar");
            $table->string("jenis_sampah");
            $table->integer("total_bayar");
            $table->string("konfirmasi");
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
        Schema::dropIfExists('databayars');
    }
};
