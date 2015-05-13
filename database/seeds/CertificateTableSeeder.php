<?php

use Illuminate\Database\Seeder;
use App\Certificate;

class CertificateTableSeeder extends Seeder{


	public function run() {

		DB::table('certificates')->delete();

		Certificate::create(array(
			'name' => 'Rodrigo Garcia Barbosa',
			'course' => 'Curso Avancado de JavaScript',
			'dt_inicial' => '2015-01-01',
			'dt_final' => '2015-03-30',
			'duration' => '5.5'
			));
	}
}