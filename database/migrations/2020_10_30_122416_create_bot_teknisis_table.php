<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotTeknisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bot_teknisis', function (Blueprint $table) {
            $table->id();
            $table->string('datel')->nullable();
            $table->string('sto')->nullable();
            $table->string('track_id')->nullable();
            $table->string('info_progress')->nullable();
            $table->date('date')->nullable();
            $table->string('kategori')->nullable();
            $table->string('evidence')->nullable();
            $table->string('user_name_telegram')->nullable();
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
        Schema::dropIfExists('bot_teknisis');
    }
}
