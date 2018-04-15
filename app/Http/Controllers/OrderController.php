<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Product;
use App\Company;
use App\Brand;
use App\Order;
use Auth;
use DB;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrder;

class OrderController extends Controller
{
    public function __construct(){
        $this->data['theme'] = 'pooled/';
    	$this->data['theme_front'] = 'pooled-front/';
    }

    public function create_order(Request $request){
        $validator = Validator::make($request->all(), [
            'product_id' => [
                'required',
            ],
            'customer_name' => [
                'required',
            ],
            'mobile' => [
                'required',
            ],
            'status' => [
                'required',
            ],
        ]);


        if ($validator->fails()) {
            return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }
        $order =new Order($request->all());
        $order->save();

        Mail::to('abbas@ccmart.in')->bcc('rameez.asec@gmail.com')->send(new NewOrder($order));

        return redirect()->back()->with(['success' => 'Order Placed Successfully']);
    }

}
