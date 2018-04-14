<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use App\ContactRequest;
use App\EmailSubscription;
use Validator;

class PageController extends Controller{

	public function __construct(){
    	$this->data['main_categories'] = Category::whereNull('parent_id')->limit(4)->with('sub_categories','sub_categories.sub_categories')->get();
    	$this->data['brands'] = Brand::limit(4)->get();
    	$this->data['theme'] = 'pooled_front/';
	}	

    public function page($page='index'){
        if($page=='index'){
            $this->data['featured_products'] = Product::where('is_featured','YES')->get();
        }
        return view($this->data['theme'].$page,$this->data);
    }

    public function category(Category $category){
        $this->data['category'] = $category;
        $this->data['products'] = $category->all_products();
        $this->data['all_brands'] = Brand::pluck('name');
        return view($this->data['theme'].'category', $this->data);
    }

    public function brands(){
        $this->data['brands'] = Brand::get();
        return view($this->data['theme'].'brands2', $this->data);
    }

    public function brand_products(Brand $brand){
        $this->data['brand'] = $brand;
        $this->data['products'] = $brand->products;
        //dd($this->data['products']);
        return view($this->data['theme'].'brand_products', $this->data);
    }

    public function product(Product $product){
    	$this->data['product'] = $product;
        return view($this->data['theme'].'product', $this->data);
    }

    public function search(Request $request){
    	$this->data['products'] = Product::where('name','like','%'.$request->q.'%')->get();
    	$this->data['query'] = $request->q;
    	$this->data['all_brands'] = Brand::pluck('name');
        return view($this->data['theme'].'search', $this->data);
    }

    public function save_contact_form(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'subject' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
            'message' => [
                'required',
            ],
        ]);


        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }
        $contact_request =new ContactRequest($request->all());
        $contact_request->save();
        return redirect()->back()->with(['success' => 'Cotact Request Sent Successfully']);
    }

    public function save_email_subscription(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'email',
                'unique:email_subscriptions',
            ],
        ]);


        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }
        $email_subscription =new EmailSubscription($request->all());
        $email_subscription->save();
        return redirect()->back()->with(['success' => 'Email Subscription Registered Successfully']);
    }


}
