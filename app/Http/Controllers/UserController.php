<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use \App\User;

class UserController extends Controller {

	//

	public function index(){

		$users = User::oldest()->get();

		return view('users.index',compact('users'));
	}

	public function show($id){

		$user = User::findorfail($id);

		return view('users.show',compact('user'));

	}

	public function create(){

		return view('users.create');
	}

    public function store(){

        $input = Request::all();

        User::create($input);

        return redirect('user');
    }


}
