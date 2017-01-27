<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link_href');
            $table->string('link_target');
            $table->string('link_name');
            $table->boolean('link_isfooter')->default(0);
            $table->boolean('link_isheader')->default(0);
            $table->boolean('link_isfirstquicklink')->default(0);
            $table->boolean('link_issecondquicklink')->default(0);
            $table->boolean('link_isaddresslink')->default(0);
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
        Schema::drop('links');
    }
}
