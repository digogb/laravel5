<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	protected $fillable = ['name','password','created_at'];

}
