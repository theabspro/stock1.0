<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Product;
use App\Company;
use App\Brand;
use App\Customer;
use App\Sale;
use App\TaxGroup;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;


class SalesController extends Controller{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function new(){
        $this->data['sale'] = new Sale;
    	$this->data['sale_details'] = [];
        //if(Auth::user()->hasRole('super-admin')){
        $this->data['payment_modes'] = [1 => 'Cash',2 => 'Cheque', 3 => 'Credit Card', 4 => 'Debit Card'];

        $this->data['tax_group_list'] = TaxGroup::pluck('name','id')->prepend('Select Tax Group','');
        $this->data['customer_list'] = Customer::pluck('name','id')->prepend('Select Customer','');
        $this->data['product_list'] = Product::pluck('name','id')->prepend('Select Product','');
        $this->data['category_list'] = Category::pluck('name','id')->prepend('Main Category','');
        $this->data['company_list'] = Company::pluck('name','id');
    	$this->data['barnds_list'] = Brand::pluck('name','id');
    	$this->data['action'] = 'New';
        return view($this->data['theme'].'sales/form', $this->data);
    }

    public function edit($product){
        $this->data['product'] = Product::findOrFail($product);
        $this->data['category_list'] = Category::pluck('name','id')->prepend('Main Category','');
        $this->data['company_list'] = Company::pluck('name','id');
        $this->data['barnds_list'] = Brand::pluck('name','id');
    	$this->data['action'] = 'Edit';
        return view($this->data['theme'].'products/form', $this->data);
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
                'category_id' => [
                    'required',
                ],
                'hsn_code' => [
                    'required',
                    'max:191'
                ],
                'sku' => [
                    'required',
                    'max:191'
                ],
                'price' => [
                    'required',
                ],
	        ]);


	        if ($validator->fails()) {
				return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
	        }

	        if(empty($request->id)){
	        	$product = new Product;
	        	$product->created_by = Auth::id();
	        }else{
	        	$product = Product::findOrFail($request->id);
	        	$product->updated_by = Auth::id();
	        }

	        $product->fill($request->all());
	        $product->save();

			DB::commit();

			$request->session()->flash('success', 'Product saved successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($product){
        $product = Product::findOrFail($product);
       	$product->deleted_by = Auth::id();
       	$product->save();
       	$product->delete();
        return redirect()->route('listCategories')->with(['success' => 'Category deleted successfully!']);
    }

}
