<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollingStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolling_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('model_type', ['locomotive', 'passenger', 'freight']);
            $table->string('number')->nullable();
            $table->string('model_description', 500)->nullable();
            $table->string('model_bottom_sign')->nullable();
            $table->string('image_path')->nullable();
            $table->string('model_owner')->nullable();
            $table->string('model_producer')->nullable();
            $table->string('couplings')->nullable();
            $table->string('nem_socket')->nullable();
            $table->string('kks')->nullable();
            $table->string('bumpers_spring_loaded')->nullable();
            $table->string('wheels')->nullable();
            $table->string('inside_dimension')->nullable();
            $table->string('wheel_flange')->nullable();
            $table->string('rp_25')->nullable();
            $table->float('model_length', 6)->nullable();
            $table->float('model_weight', 6)->nullable();
            $table->string('railway_management')->nullable();
            $table->string('epoch')->nullable();
            $table->float('total_length', 6)->nullable();
            $table->float('maximum_speed', 6)->nullable();
            $table->string('usage_notes', 500)->nullable();
            $table->string('disinfected')->nullable();
            $table->string('efficient')->nullable();
            $table->string('fault_description', 500)->nullable();
            $table->string('additional_notes_1', 500)->nullable();
            $table->string('additional_notes_2', 500)->nullable();
            $table->string('express_delivery')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->bigInteger('user_id')->unsigned()->index();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolling_stocks');
    }
}
