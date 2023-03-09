<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocomotivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locomotives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sound')->nullable();
            $table->string('decoder_type')->nullable();
            $table->string('name')->nullable();
            $table->string('axle_load')->nullable();
            $table->float('wheel_base', 6)->nullable();
            $table->float('service_weight', 6)->nullable();
            $table->string('type_of_heating')->nullable();
            $table->float('axle_arrangement', 6)->nullable();
            $table->float('power', 6)->nullable();
            $table->integer('address_ddc')->nullable();
            $table->string('speed_steps')->nullable();
            $table->string('mode')->nullable();
            $table->string('analog')->nullable();
            $table->string('type_ddc')->nullable();
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
        Schema::dropIfExists('locomotives');
    }
}
