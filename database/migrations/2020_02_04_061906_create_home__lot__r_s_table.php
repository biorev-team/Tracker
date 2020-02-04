<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeLotRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_lot_r_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lot_id');
            $table->integer('home_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('home_lot_r_s', function($table) {
            $table->foreign('home_id')->references('id')->on('homes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_lot_r_s');
    }
}
