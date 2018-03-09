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
}
