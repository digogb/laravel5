<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\User;

use Illuminate\Http\Request;

class userController extends Controller {

	//

	public function index(){

		$users = User::all();

		return view('users.index',compact('users'));
	}

	public function show($id){

		$user = User::findorfail($id);

		return view('users.show',compact('user'));

	}


}
