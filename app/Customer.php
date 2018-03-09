<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $fillable = [
		'name',
		'mobile_1',
		'mobile_2',
		'email',
		'address_line_1',
		'address_line_2',
		'city_id',
		'state_id',
		'country_id',
		'company_id',
	];

    public function company(){
    	return $this->belongsTo('App\Company');
    }

    public function city(){
    	return $this->belongsTo('App\City');
    }

    public function state(){
    	return $this->belongsTo('App\State');
    }

    
}
