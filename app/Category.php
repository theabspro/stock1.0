<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    
    protected $table = 'categories';
    protected $guarded = ['is_active'];

    public function parent(){
    	return $this->belongsTo(static::class,'parent_id');
    }

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function sub_categories(){
    	return $this->hasMany('App\Category','parent_id');
    }

    public function products(){
    	return $this->hasMany('App\Product');
    }

    public function all_products(){
        $all_products = $this->products;
        foreach($this->sub_categories as $sub_category){
            $all_products = $all_products->merge($sub_category->all_products());
        }
        return $all_products;
    }
}
