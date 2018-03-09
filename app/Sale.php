<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
    	'name',
    	'company_id',
    	'category_id',
    	'brand_id',
    	'hsn_code',
    	'sku',
    	'price',
    ];

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function sale_details(){
        return $this->hasMany('App\SaleDetail');
    }

    public function getCreatedAtAttribute($value){
        return empty($value) ? date('d-m-Y') : date('d-m-Y',strtotime($value));
    }

}
