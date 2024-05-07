<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolGradesTable extends Migration {

	public function up()
	{
		Schema::create('school_grades', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 30);
			$table->text('note');
		});
	}

	public function down()
	{
		Schema::drop('school_grades');
	}
}