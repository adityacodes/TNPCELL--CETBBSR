<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteTnpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_n_p_s', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('regdno')->unique();
            $table->string('branch');
            $table->string('dob',10);
            $table->string('gender',10);

            $table->string('tenthyear',5);
            $table->string('tenthpercent',5);
            $table->string('tenthboard',6);

            $table->string('twelthyear',5);
            $table->string('twelthpercent',5);
            $table->string('twelthboard',6);

            $table->string('diplomayear',5);
            $table->string('diplomapercent',5);
            $table->string('diplomaboard',6);

            $table->string('cgpa',5);
            $table->string('backlog',10);
            $table->string('paddress',250);
            $table->string('praddress',250);

            $table->string('fname',50);
            $table->string('foccupation',50);
            $table->string('mname',50);
            $table->string('moccupation',50);
            $table->string('rname',50);
            $table->string('roccupation',50);
            $table->string('internships',250);
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_n_p_s');
    }
}
