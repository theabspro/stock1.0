<?php

namespace App;

use Zizaco\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends EntrustRole{	
	use SoftDeletes;
	protected $fillable = [
		'name',
		'code',
		'description',
	];
    public function users(){
        return $this->hasMany('App\User');
    }

    public function usersList(){
        return $this->hasMany('App\User');
    }

}
