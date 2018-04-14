<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Product;
use App\Company;
use App\Brand;
use App\ProductFeature;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;
use Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct(){
    	$this->data['theme'] = 'pooled/';
    }

    public function list(){
    	if(Auth::user()->hasRole('super-admin')){
    		$this->data['products'] = Product::where('company_id')->with('parent')->get();
    	}else{
    		$this->data['products'] = Product::where('company_id',Auth::user()->company_id)->get();
    	}
        return view($this->data['theme'].'products/list', $this->data);
    }

    public function add(){
    	$this->data['product'] = new Product;
    	$this->data['category_list'] = Category::pluck('name','id')->prepend('Main Category','');
        $this->data['company_list'] = Company::pluck('name','id');
    	$this->data['barnds_list'] = Brand::pluck('name','id');
    	$this->data['action'] = 'Add';
        return view($this->data['theme'].'products/form', $this->data);
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

            $image = 'image1';
            for($i=1;$i<=3;$i++){
                $image = 'image'.$i;
                if($request->hasFile($image)) {
                    $res = Storage::disk('app')->makeDirectory('products/'.$product->id);
                    $extension = $request->file($image)->getClientOriginalExtension();
                    Image::make($request->file($image))->resize(166, NULL, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save('app/products/'.$product->id.'/'.$i.'.'.$extension);
                    $product->$image = $i.'.'.$extension;
                    $product->save();

                }
            }

            //DELETING EXISTING FEATURES
            ProductFeature::where('product_id',$product->id)->delete();
            if($request->features){
                foreach($request->features as $feature){
                    $product_feature = new ProductFeature;
                    $product_feature->product_id = $product->id;
                    $product_feature->feature = $feature;
                    $product_feature->save();
                }
            }
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
