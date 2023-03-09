<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_sign')->nullable();
            $table->string('uic_type')->nullable();
            $table->float('service_weight', 6)->nullable();
            $table->integer('places_first_class')->nullable();
            $table->integer('places_second_class')->nullable();
            $table->string('heating')->nullable();
            $table->string('intern_ver')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->bigInteger('rolling_stock_id')->unsigned()->index();
            $table->foreign('rolling_stock_id')->references('id')->on('rolling_stocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
