<?php

namespace App\Http\Controllers;

use App\Models\cat;
use App\Models\product;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController
{
public function index()
{
    if (Auth()->user()) {
        $cat = DB::table('cats')->where('username', '=', Auth::user()->username)->count();
        $product= DB::table('products')->where('status', '=', '1')->limit('4')->get();

        return view("home", compact("product", "cat"));
    }
$product= DB::table('products')->where('status', '=', '1')->limit('4')->get();
//    $pam=DB::table('gallerys')->where('status', '=', '1')->get();

return view("home", compact("product"));
}

public  function shop()
{
    $product= DB::table('products')->where('status', '=', '1')->get();
return view("shop", compact("product"));
}
public  function cat()
{
    $cat=DB::table('cats')->where('username', '=', Auth::user()->username)->get();

    $sumc=cat::where('username', Auth::user()->username)->sum('totalprice');
    if ($sumc ==0){
        $ship=0;
    }else {
        $ship = 1000;
    }
    $tsum=$sumc + $ship;
    return view("cart", compact("cat", "ship", "tsum", "sumc"));
}

public function addcat($request)
{
//    return $request;
//    $request->validate([
//        'id' => 'required',
//    ]);

    $product= product::where('id', $request)->first();
    $cat=cat::create([
        'username' => Auth::user()->username,
        'product' => $product['product_name'],
        'product_id' => $product['product_id'],
        'amount'=>$product['amount'],
        'path'=>$product['path'],
        'quantity'=>1,
        'totalprice'=>$product['amount'],
    ]);
    return redirect(route('cart'))
        ->with('status', 'New cart');
}
public  function increasequantity($request)
{
    $cat=cat::where('id', $request)->first();
    $previousquantity=(int)$cat->quantity + 1;
    $actualprice=(int)$cat->amount;
    $totalprice=$actualprice*$previousquantity;

    $cat->quantity=$previousquantity;
    $cat->totalprice=$totalprice;
    $cat->save();
    return redirect(route("cart"))->with('status', 'cart updated');
}
    public  function decreasequantity($request)
    {
        $cat=cat::where('id', $request)->first();
        $previousquantity=(int)$cat->quantity - 1;
        $actualprice=(int)$cat->amount;
        $totalprice=$actualprice*$previousquantity;

        $cat->quantity=$previousquantity;
        $cat->totalprice=$totalprice;
        $cat->save();
        return redirect(route("cart"))->with('status', 'cart updated');
    }
public  function details(Request  $request)
{
    $product=product::where('id', $request->id)->first();

    return view("product-detail", compact("product"));

}
public function delete($request)
{
    $delete=cat::where('id', $request)->delete();
    return redirect(route("cart"))->with('status', 'cart has been deleted');
}
public function pay($request)
{
    $cat=cat::where('username', $request)->get();
    $or=cat::where('username', $request)->sum('totalprice');

    return view("checkout", compact("cat", "or"));

}
public  function orderproduct($request)
{
    $cat=cat::where('id', $request)->first();
}
}
