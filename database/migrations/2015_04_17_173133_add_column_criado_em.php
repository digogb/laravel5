<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCriadoEm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('created_at');
        });
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('updated_at');
        });


        Schema::table('users', function(Blueprint $table){
            $table->dateTime('created_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn(['created_at']);
        });
        Schema::table('users', function(Blueprint $table){
            $table->timestamps();
        });

	}

}
