<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use database\CertificateTableSeeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CertificateTableSeeder');
	}

}
