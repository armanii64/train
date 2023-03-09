<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAxleArrangementColumnInLocomotivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locomotives', function (Blueprint $table) {
            $table->string('axle_arrangement', 100)->nullable()->after('type_of_heating')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locomotives', function (Blueprint $table) {
            $table->float('axle_arrangement', 6)->nullable()->after('type_of_heating')->change();
        });
    }
}
