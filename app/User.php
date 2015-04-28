<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $dates = ['created_at'];

    public $timestamps = false;
    //
    protected $fillable = ['name', 'password', 'created_at'];


    public function setCreatedAtAttribute($date)
    {

        $this->attributes['created_at'] = Carbon::parse($date);

    }

    public function scopeNewUsers($query)
    {

        $query->where('created_at', '>=', Carbon::now()->subDays(3));

    }

    public function scopeOldUsers($query)
    {

        $query->where('created_at', '<=', Carbon::now()->subDays(2));
    }

    public function fones(){

        return $this->hasMany('App\Fone');
    }

}