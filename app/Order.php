<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{
    
    protected $fillable = [
        'product_id',
        'customer_name',
        'email',
        'mobile',
        'status',
    ];

    public function product(){
    	return $this->belongsTo('App\Product');
    }

}
