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
        $product= DB::table('products')->where('status', '=', '1')->limit('5')->get();

        return view("home", compact("product", "cat"));
    }
$product= DB::table('products')->where('status', '=', '1')->limit('5')->get();
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
    $cat=cat::where('username', Auth::user()->username)->where('status', '1')->get();

    return view("cat", compact("cat"));
}

public  function  addcat(Request $request)
{
    $request->validate([
        'id' => 'required',
    ]);

    $product= product::where('id', $request->id)->first();
    $cat=cat::create([
        'username' => Auth::user()->username,
        'product' => $product['product_name'],
        'product_id' => $product['product_id'],
    ]);
    return redirect(route('cat'))
        ->with('status', 'New cart');
}
public  function details(Request  $request)
{
    $product=product::where('id', $request->id)->first();

    return view("product-detail", compact("product"));

}
}
