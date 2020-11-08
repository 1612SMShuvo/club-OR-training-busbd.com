<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamousPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('famous_persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('address');
            $table->string('work_place');
            $table->string('phone');
            $table->string('rank');
            $table->string('image');
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
        Schema::dropIfExists('famous_persons');
    }
}
