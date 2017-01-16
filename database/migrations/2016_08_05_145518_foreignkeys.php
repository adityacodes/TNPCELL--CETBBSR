<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('name')->references('regdno')->on('t_n_p_s')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('email')->references('email')->on('t_n_p_s')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropForeign('users_name_foreign');
            $table->dropForeign('users_email_foreign');
        });
    }
}
