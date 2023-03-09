<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_revision')->nullable();
            $table->string('car_sign')->nullable();
            $table->string('uic_type')->nullable();
            $table->string('break_type')->nullable();
            $table->string('wheel_base')->nullable();
            $table->string('gr_obc')->nullable();
            $table->float('cargo_length', 6)->nullable();
            $table->float('cargo_area', 6)->nullable();
            $table->float('cargo_volume', 6)->nullable();
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
        Schema::dropIfExists('freights');
    }
}
