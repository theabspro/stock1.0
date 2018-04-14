<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'brand_id',
        'company_id',
        'name',
        'hsn_code',
        'specifications',
        'advantages',
        'features',
        'rating',
        'is_new',
        'is_featured',
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

    public function features(){
        return $this->hasMany('App\ProductFeature');
    }

}
