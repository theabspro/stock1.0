<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Company;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;


class CategoryController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function list(){
    	if(Auth::user()->hasRole('super-admin')){
    		$this->data['categories'] = Category::where('company_id')->with('parent')->get();
    	}else{
    		$this->data['categories'] = Category::where('company_id',Auth::user()->company_id)->get();
    	}
        return view($this->data['theme'].'categories/list', $this->data);
    }

    public function add(){
    	$this->data['category'] = new Category;
    	$this->data['parent_list'] = Category::pluck('name','id')->prepend('Main Category','');
    	$this->data['company_list'] = Company::pluck('name','id');
    	$this->data['action'] = 'Add';
        return view($this->data['theme'].'categories/form', $this->data);
    }

    public function edit($category){
        $this->data['category'] = Category::findOrFail($category);
        $this->data['parent_list'] = Category::where('id','<>',$this->data['category']->id)->pluck('name','id')->prepend('Main Category','');
        $this->data['company_list'] = Company::pluck('name','id');
    	$this->data['action'] = 'Edit';
        return view($this->data['theme'].'categories/form', $this->data);
    }

    public function save(Request $request){
    	// /return response()->json($request->all());
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
	        	$category = new Category;
	        	$category->created_by = Auth::id();
	        }else{
	        	$category = Category::findOrFail($request->id);
	        	$category->updated_by = Auth::id();
	        }

	        $category->fill($request->all());
	        $category->save();

			DB::commit();

			$request->session()->flash('success', 'Category saved successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($category){
        $category = Category::findOrFail($category);
       	$category->deleted_by = Auth::id();
       	$category->save();
       	$category->delete();
        return redirect()->route('listCategories')->with(['success' => 'Category deleted successfully!']);
    }

}
