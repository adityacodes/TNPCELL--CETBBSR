<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignbranchrelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_n_p_s', function(Blueprint $table)
        {
            $table->foreign('branch')->references('name')->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_n_p_s', function (Blueprint $table)
        {
            $table->dropForeign('t_n_p_s_branch_foreign');
        });
    }
}
