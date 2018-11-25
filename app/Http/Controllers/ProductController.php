<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function create()
    {
    	return view('admin.product.create');
    }

    public function store(Request $request)
    {
    	$pro_name = $request->pro_name;
    	$pro_code = $request->pro_code;
    	$pro_price = $request->pro_price;
    	$pro_img = $request->pro_img;
        if (isset($request->id)) {
            # update product
            $id = $request->id;
            $add_product = DB::table("products")->where('id',$id)
            ->insert([
            'pro_name' => $pro_name,
            'pro_code' => $pro_code,
            'pro_price'=> $pro_price,
            'pro_img'  => "image.png",
            'updated_at'=> \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        }else{
    	$add_product = DB::table("products")->insert([
    		'pro_name' => $pro_name,
    		'pro_code' => $pro_code,
    		'pro_price'=> $pro_price,
    		'pro_img'  => $pro_img,
    		'created_at'=> \Carbon\Carbon::now()->toDateTimeString(),
    	]);
    }
    	if ($add_product) {
    		echo "done";
    	}else{
    		echo "Error";
    	}
    }
}
