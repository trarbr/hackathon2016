<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptyingCalenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emptying_calender', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street');
            $table->integer('zipcode');
            $table->date('date_start');
            $table->integer('days_interval');
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
        Schema::drop('emptying_calender');
    }
}
