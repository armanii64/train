<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compositions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description', 500)->nullable();
            $table->string('symbol', 25)->nullable();
            $table->string('traction_type', 25)->nullable();
            $table->enum('status', ['in_progress', 'to_accept', 'accepted'])->default('in_progress');
            $table->timestamps();
            $table->softDeletes();

            $table->bigInteger('event_id')->unsigned()->index()->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('compositions');
    }
}
