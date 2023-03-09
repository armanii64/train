<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsInCompositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('compositions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('compositions', function (Blueprint $table) {
            $table->enum('status', ['in_progress', 'sent', 'to_accept', 'accepted'])->default('in_progress')->after('traction_type');
            $table->enum('type', ['original', 'copy'])->default('original')->after('status');
            $table->bigInteger('original_id')->unsigned()->index()->nullable();
            $table->foreign('original_id')->references('id')->on('compositions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('compositions', function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table('compositions', function (Blueprint $table) {
            $table->enum('status', ['in_progress', 'to_accept', 'accepted'])->default('in_progress')->after('traction_type');
            $table->dropColumn('type');
            $table->dropForeign('compositions_original_id_foreign');
            $table->dropColumn('original_id');
        });
    }
}
