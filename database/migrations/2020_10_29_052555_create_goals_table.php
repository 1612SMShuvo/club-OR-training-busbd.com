<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('goal1')->nullable();
            $table->string('goal2')->nullable();
            $table->string('goal3')->nullable();
            $table->string('goal4')->nullable();
            $table->string('goal5')->nullable();
            $table->string('goal6')->nullable();
            $table->string('goal7')->nullable();
            $table->string('goal8')->nullable();
            $table->string('goal9')->nullable();
            $table->string('goal10')->nullable();
            $table->string('intention1')->nullable();
            $table->string('intention2')->nullable();
            $table->string('intention3')->nullable();
            $table->string('intention4')->nullable();
            $table->string('intention5')->nullable();
            $table->string('intention6')->nullable();
            $table->string('intention7')->nullable();
            $table->string('intention8')->nullable();
            $table->string('intention9')->nullable();
            $table->string('intention10')->nullable();
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
        Schema::dropIfExists('goals');
    }
}
