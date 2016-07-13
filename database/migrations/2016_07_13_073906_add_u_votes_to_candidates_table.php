<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUVotesToCandidatesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('candidates', function($table)
        {
            $table->integer('u_votes')->after('votes');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('candidates', function($table)
        {
            $table->dropColumn('u_votes');
        });
    }
}
