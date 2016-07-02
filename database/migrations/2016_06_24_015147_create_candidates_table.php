<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('guc_id')->unique();
            $table->string('ieee_membership_id')->unique();
            $table->string('personal_email')->unique();
            $table->string('guc_email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_number');
            $table->string('major');
            $table->string('image_url');  
            $table->string('plan_url');
            $table->string('video_url');

            $table->integer('votes');
            $table->boolean('status');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidates');
    }
}
