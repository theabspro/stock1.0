<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class DashboardController extends Controller{

	public function __construct(){
    	$this->data['theme'] = 'pooled/';
		//$this->middleware('role:super-admin|rm|bo|approval-1|approval-2|finance');
	}	

    public function dashboard(){		
        return view($this->data['theme'].'dashboard',$this->data);
    }
}
