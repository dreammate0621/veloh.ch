<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('organizers');
            $table->date('date');
            $table->string('place', 255);
            $table->string('street', 255);
            $table->string('town', 255);
            $table->time('sales_open_time');
            $table->time('sales_close_time');
            $table->time('presales_open_time');
            $table->time('presales_close_time');
            $table->time('private_previous_open_time');
            $table->time('private_previous_close_time');
            $table->time('private_sales_open_time');
            $table->time('private_sales_close_time');
            $table->time('dealer_previous_open_time');
            $table->time('dealer_previous_close_time');
            $table->time('dealer_sales_open_time');
            $table->time('dealer_sales_close_time');
            $table->time('private_receive_open_time');
            $table->time('private_receive_close_time');
            $table->time('dealer_receive_open_time');
            $table->time('dealer_receive_close_time');
            $table->string('commission', 255);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('markets');
    }
}
