<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnPasswordUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('password');
		});

		Schema::table('users', function(Blueprint $table)
		{
			$table->char('password','4')->nullable()->after('name');
		});


		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table){
			$table->dropColumn('password');

		});
		Schema::table('users', function(Blueprint $table){
			$table->string('password')->after('name');
		});

	
	}


}
