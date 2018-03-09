<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name',
    	'company_id',
    	'category_id',
    	'brand_id',
    	'hsn_code',
    ];

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function stocks(){
        return $this->hasMany('App\Stock');
    }

}
