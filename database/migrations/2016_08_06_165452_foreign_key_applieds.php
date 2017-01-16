<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyApplieds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applieds', function(Blueprint $table)
        {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('postid')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applieds', function (Blueprint $table)
        {
            $table->dropForeign('applieds_userid_foreign');
            $table->dropForeign('applieds_postid_foreign');
        });
    }
}
