<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Company;
use App\Brand;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;


class BrandController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function list(){
    	if(Auth::user()->hasRole('super-admin')){
    		$this->data['brands'] = Brand::where('company_id')->with('parent')->get();
    	}else{
    		$this->data['brands'] = Brand::where('company_id',Auth::user()->company_id)->get();
    	}
        return view($this->data['theme'].'brands/list', $this->data);
    }

    public function add(){
    	$this->data['brand'] = new Brand;
    	$this->data['company_list'] = Company::pluck('name','id');
    	$this->data['action'] = 'Add';
        return view($this->data['theme'].'brands/form', $this->data);
    }

    public function edit($brand){
        $this->data['brand'] = Brand::findOrFail($brand);
        $this->data['company_list'] = Company::pluck('name','id');
    	$this->data['action'] = 'Edit';
        return view($this->data['theme'].'brands/form', $this->data);
    }

    public function save(Request $request){
		DB::beginTransaction();
    	try{
			$error_messages = [
			];

	        $validator = Validator::make($request->all(), [
	            'name' => [
	            	'required',
	            	'max:191'
	            ],
                'company_id' => [
                    'required',
                ],
	        ]);

	        if ($validator->fails()) {
				return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
	        }

	        if(empty($request->id)){
	        	$brand = new Brand;
	        	$brand->created_by = Auth::id();
	        }else{
	        	$brand = Brand::findOrFail($request->id);
	        	$brand->updated_by = Auth::id();
	        }

	        $brand->fill($request->all());
	        $brand->save();

			DB::commit();

			$request->session()->flash('success', 'Brand saved successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($brand){
        $brand = Brand::findOrFail($brand);
       	$brand->deleted_by = Auth::id();
       	$brand->save();
       	$brand->delete();
        return redirect()->route('listBrands')->with(['success' => 'Brand deleted successfully!']);
    }

}
