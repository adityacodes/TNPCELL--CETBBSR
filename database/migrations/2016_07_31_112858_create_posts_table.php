<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('body');
			$table->boolean('published')->default(0);

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
		Schema::drop('posts');
	}

}
