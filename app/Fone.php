<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fone extends Model {

	//

    public $timestamps = false;

    protected $fillable = ['number'];

    public function user(){

        return $this->belongsTo('App\User');

    }

}
