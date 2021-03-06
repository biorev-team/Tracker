<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_analytics', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('lot_id');
                $table->bigIncrement('impression')->unsigned();
                $table->bigInteger('click')->unsigned();
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
        Schema::dropIfExists('lot_analytics');
    }
}
