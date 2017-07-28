<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('street', 255);
            $table->string('postcode', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('website', 255);
            $table->text('additional_info');
            $table->enum('bike_amount', ['x-large',
                                         'large',
                                         'medium',
                                         'small',
                                         'x-small'])->default('x-large');
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
        Schema::dropIfExists('organizers');
    }
}
