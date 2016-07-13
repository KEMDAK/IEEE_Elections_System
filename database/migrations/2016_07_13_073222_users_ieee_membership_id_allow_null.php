<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersIeeeMembershipIdAllowNull extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->integer('ieee_membership_id')->nullable()->change();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->integer('ieee_membership_id')->nullable(false)->change();
        });
    }
}
