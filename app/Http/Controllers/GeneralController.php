<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Customer;
use App\Company;
use App\State;
use App\City;
use App\Product;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;


class GeneralController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function getProductDetail(Product $product){
        return response()->json(['success'=> true, 'product'=>$product]);
    }

    public function getProductStocks(Product $product){
        $stock = $product->stocks()->select('sku','id','qty','price')->get();
        //return response()->json($product);
        return response()->json(['success'=> true, 'stocks'=>$stock]);
    }

    public function add(){
    	$this->data['customer'] = new Customer;
        $this->data['company_list'] = Company::pluck('name','id');
        $this->data['states_list'] = State::pluck('name','id')->prepend('Select State','');
        $this->data['city_list'] = City::pluck('name','id')->prepend('Select City','');
    	$this->data['action'] = 'Add';
        return view($this->data['theme'].'customers/form', $this->data);
    }

    public function edit($customer){
        $this->data['customer'] = Customer::findOrFail($customer);
        $this->data['company_list'] = Company::pluck('name','id');
        $this->data['states_list'] = State::pluck('name','id')->prepend('Select State','');
        $this->data['city_list'] = City::pluck('name','id')->prepend('Select City','');
    	$this->data['action'] = 'Edit';
        return view($this->data['theme'].'customers/form', $this->data);
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
                'email' => [
                    'max:191'
                ],
                'mobile_1' => [
                    'required',
                    'max:10'
                ],
                'mobile_2' => [
                    'max:10'
                ],
                'state_id' => [
                    'required',
                ],
                'city_id' => [
                    'required',
                ],
                'country_id' => [
                ],
                'address_line_1' => [
                    'max:255'
                ],
                'address_line_2' => [
                    'max:255'
                ],
	        ]);


	        if ($validator->fails()) {
				return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
	        }

	        if(empty($request->id)){
	        	$customer = new Customer;
	        	$customer->created_by = Auth::id();
	        }else{
	        	$customer = Customer::findOrFail($request->id);
	        	$customer->updated_by = Auth::id();
	        }

	        $customer->fill($request->all());
	        $customer->save();

			DB::commit();

			$request->session()->flash('success', 'Customer saved successfully!');
			return response()->json(['success' => true]);
    	}catch(Exception $e){
			DB::rollBack();	
			return response()->json(['success' => false,'errors'=>['Exception Error' => $e->getMessage()]]);
    	}

    }

    public function delete($customer){
        $customer = Customer::findOrFail($customer);
       	$customer->deleted_by = Auth::id();
       	$customer->save();
       	$customer->delete();
        return redirect()->route('listCategories')->with(['success' => 'Category deleted successfully!']);
    }

}
