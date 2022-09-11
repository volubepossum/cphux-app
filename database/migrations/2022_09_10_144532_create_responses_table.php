<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->dateTime('timestamp');
            $table->enum('permission', ['Yes', 'No']);
            $table->enum('gender',['Male','Female','Genderqueer','Prefer not to say']);
            $table->string('postal_code');
            $table->string('education');
            $table->string('education_institute');
            $table->tinyInteger('years_of_experience');
            $table->string('employment_commitment');
            $table->string('employment_type');
            $table->string('job_category');
            $table->integer('monthly_salary');
            $table->string('job_title')->nullable();
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
        Schema::dropIfExists('responses');
    }
};
