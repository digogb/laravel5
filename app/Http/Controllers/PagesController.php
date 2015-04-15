<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

	public function about(){


		$people = ['Neto','livia','rafael'];
		return view('pages.about', compact('people'));

	}

}
