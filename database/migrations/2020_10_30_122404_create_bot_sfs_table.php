<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotSfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bot_sfs', function (Blueprint $table) {
            $table->id();
            $table->string('sf_chat_id')->nullable();
            $table->string('teknisi_chat_id')->nullable();
            $table->string('sto')->nullable();
            $table->string('datel')->nullable();
            $table->string('nama')->nullable();
            $table->string('track_id')->nullable();
            $table->string('no_hp1')->nullable();
            $table->string('no_hp2')->nullable();
            $table->string('alamat')->nullable();
            $table->string('odp')->nullable();
            $table->string('kode_sales')->nullable();
            $table->string('user_name_telegram')->nullable();
            $table->string('user_name_telegram_teknisi')->nullable();
            $table->string('info_progress')->nullable();
            $table->string('kategori')->nullable();
            $table->string('paket')->nullable();
            $table->string('sc_id')->nullable();
            $table->string('nd_internet')->nullable();
            $table->string('nd_telp')->nullable();
            $table->string('teknisi')->nullable();
            $table->string('layanan')->nullable();
            $table->string('wo_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bot_sfs');
    }
}
