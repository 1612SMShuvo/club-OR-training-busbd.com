<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeechGsecretaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speech_gsecretary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('g_name');
            $table->string('g_address');
            $table->string('g_mobile');
            $table->string('g_talk');
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
        Schema::dropIfExists('speech_gsecretary');
    }
}
