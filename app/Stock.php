<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
    	'product_id',
        'qty',
        'price',
        'sku',
        'comments',
    	'company_id',
    ];

    public $timestamps = false;

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function user(){
        return $this->belongsTo('App\User','created_by');
    }

}
