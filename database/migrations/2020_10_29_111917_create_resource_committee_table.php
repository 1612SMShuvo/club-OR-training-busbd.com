<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceCommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_committee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_id')->unique();
            $table->string('committee_name');
            $table->string('advisor_name');
            $table->string('rank');
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('resource_committee');
    }
}
