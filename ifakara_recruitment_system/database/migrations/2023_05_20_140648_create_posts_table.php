<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->date('application_date');
                $table->date('deadline_date');
                $table->text('post_description');
                $table->string('post_file')->nullable();
                $table->string('email');
                $table->unsignedBigInteger('job_name');
                $table->unsignedBigInteger('position_name');
                $table->unsignedBigInteger('job_location');
                $table->foreign('job_name')->references('job_id')->on('jobs');
                $table->foreign('position_name')->references('job_id')->on('jobs');
                $table->foreign('job_location')->references('job_id')->on('jobs');
                $table->timestamps();
            });
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
