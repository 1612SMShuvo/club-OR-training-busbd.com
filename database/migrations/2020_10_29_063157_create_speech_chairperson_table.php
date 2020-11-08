<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeechChairpersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speech_chairperson', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('c_name');
            $table->string('c_address');
            $table->string('c_mobile');
            $table->string('c_talk');
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
        Schema::dropIfExists('speech_chairperson');
    }
}
