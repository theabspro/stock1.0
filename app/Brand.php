<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
    	'company_id',
    	'name',
    	'image',
    ];

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function products(){
    	return $this->hasMany('App\Product');
    }
}
