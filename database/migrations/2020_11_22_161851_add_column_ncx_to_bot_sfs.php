<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNcxToBotSfs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bot_sfs', function (Blueprint $table) {
            $table->string('crew')->after('wo_id')->nullable();
            $table->string('ncx_id')->after('crew')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bot_sfs', function (Blueprint $table) {
            $table->dropColumn('crew');
            $table->dropColumn('ncx_id');
        });
    }
}
