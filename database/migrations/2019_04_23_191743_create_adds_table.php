<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type' , ['admissions' , 'jobs' , 'tenders']);
            $table->integer('newspaper_id')->nullable();
            $table->integer('qualification_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_abbrevation')->nullable();
            $table->integer('total_pos')->nullable();
            $table->string('job_loc')->nullable();
            $table->string('salary')->nullable();
            $table->string('skills')->nullable();
            $table->string('gender')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('age_limit')->nullable();
            $table->string('experience')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('job_email')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->string('qualification')->nullable();
            $table->string('title')->nullable();
            $table->string('minimum_requirements')->nullable();
            $table->string('apply_by')->nullable();
            $table->string('description')->nullable();
            $table->string('last_date')->nullable();
            $table->string('newspaper_piece')->nullable();
            $table->string('rel_logo')->nullable();
            $table->enum('created_by' , ['admin' , 'executive']);
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
        Schema::dropIfExists('adds');
    }
}
