<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use \App\User;

class UserController extends Controller {

	//

	public function index(){

		$users = User::oldest()->NewUsers()->get();

		return view('users.index',compact('users'));
	}

	public function show($id){

		$user = User::findorfail($id);

		return view('users.show',compact('user'));

	}

	public function create(){

		return view('users.create');
	}

    public function store(UserRequest $request){

        User::create($request->all());

        return redirect('user');
    }

    public function edit($id){

        $user = User::findOrFail($id);

        return view('users.edit',compact('user'));
    }

    public function update($id, UserRequest $request){

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect('user');

    }



}
