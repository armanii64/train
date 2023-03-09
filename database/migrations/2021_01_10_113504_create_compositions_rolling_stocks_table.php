<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompositionsRollingStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compositions_rolling_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('composition_id')->unsigned()->index();
            $table->foreign('composition_id')->references('id')->on('compositions')->onDelete('cascade');

            $table->bigInteger('rolling_stock_id')->unsigned()->index();
            $table->foreign('rolling_stock_id')->references('id')->on('rolling_stocks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compositions_rolling_stocks');
    }
}
