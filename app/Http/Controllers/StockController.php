<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Stock;
use App\Product;
use App\Category;
use App\Company;
use App\Brand;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;


class StockController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function list(){
    	if(Auth::user()->hasRole('super-admin')){
    		$this->data['stocks'] = Stock::where('company_id')->orderBy('created_at','DESC')->with('company','product')->get();
    	}else{
    		$this->data['stocks'] = Stock::where('company_id',Auth::user()->company_id)->orderBy('created_at','DESC')->with('company','product')->get();
    	}
        //dd($this->data['stocks']);
        return view($this->data['theme'].'stock/list', $this->data);
    }

    public function add(){
    	$this->data['stock'] = new Stock;
    	$this->data['product_list'] = Product::pluck('name','id')->prepend('Select Product','');
        $this->data['company_list'] = Company::pluck('name','id');
        $this->data['category_list'] = Category::pluck('name','id')->prepend('Main Category','');
        $this->data['brands_list'] = Brand::pluck('name','id');
        $this->data['company_list'] = Company::pluck('name','id');
        $this->data['barnds_list'] = Brand::pluck('name','id');

    	$this->data['action'] = 'Add';
        return view($this->data['theme'].'stock/form', $this->data);
    }

    public function save(Request $request){
		DB::beginTransaction();
    	try{
			$error_messages = [
			];

	        $validator = Validator::make($request->all(), [
	            'product_id' => [
	            	'required',
	            ],
                'company_id' => [
                    'required',
                ],
                'qty' => [
                    'required',
                ],
                'price' => [
                    'required',
                ],
                'sku' => [
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
	        	$stock = new Stock;
	        	$stock->created_by = Auth::id();
	        }

	        $stock->fill($request->all());
	        $stock->save();

			DB::commit();

			$request->session()->flash('success', 'Stock saved successfully!');
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
