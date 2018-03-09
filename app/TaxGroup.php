<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxGroup extends Model
{
    public function taxes(){
    	return $this->hasMany('App\Tax');
    }
}
