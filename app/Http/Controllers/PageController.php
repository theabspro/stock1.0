<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
class PageController extends Controller{

	public function __construct(){
    	$this->data['main_categories'] = Category::whereNull('parent_id')->limit(4)->with('sub_categories','sub_categories.sub_categories')->get();
    	$this->data['brands'] = Brand::limit(4)->get();
    	$this->data['theme'] = 'pooled_front/';
	}	

    public function page($page='index'){
        return view($this->data['theme'].$page,$this->data);
    }

    public function category(Category $category){
    	$this->data['category'] = $category;
    	$this->data['products'] = $category->all_products();
    	$this->data['all_brands'] = Brand::pluck('name');
        return view($this->data['theme'].'category', $this->data);
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



}
