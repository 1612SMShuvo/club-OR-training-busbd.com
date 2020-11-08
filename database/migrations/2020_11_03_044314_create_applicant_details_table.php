<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_details', function (Blueprint $table) {
            $table->bigIncrements('a_id');
            $table->string('role_id')->nullable();
            $table->string('applicant_id')->unique()->nullable();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('email')->unique();
            $table->string('nid')->unique();
            $table->string('mobile');
            $table->string('c_house');
            $table->string('c_village');
            $table->string('c_postoffice');
            $table->string('c_upzilla');
            $table->string('c_zilla');
            $table->string('c_division');
            $table->string('p_house');
            $table->string('p_village');
            $table->string('p_postoffice');
            $table->string('p_upzilla');
            $table->string('p_zilla');
            $table->string('p_division');
            $table->string('nominee');
            $table->string('father_nominee');
            $table->string('nominee_mobile');
            $table->string('addict')->nullable();
            $table->string('indebted')->nullable();
            $table->string('accused')->nullable();
            $table->string('patient')->nullable();
            $table->string('pp_image');
            $table->string('s_image');
            $table->string('password');
            $table->string('status');
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
        Schema::dropIfExists('applicant_details');
    }
}
