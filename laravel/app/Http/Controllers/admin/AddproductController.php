<?php

namespace App\Http\Controllers\admin;


use App\Console\helper;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddproductController
{
    public function add(Request $request)
    {
        $request->validate([
            'productid' => 'required',
            'name' => 'required',
            'picture' => 'required',
            'pictures' => 'required',
            'desc' => 'required',
            'amount' => 'required',
        ]);

        $re = helper::upload('product/', 'png', $request->file('picture'));
        $re1 = helper::upload('product/', 'png', $request->file('pictures'));

        $pro = product::create([
            'product_name' => $request->name,
            'product_id' => $request->productid,
            'description' => $request->desc,
            'path' => $re,
            'path1' => $re1,
            'amount' => $request->amount,
        ]);

        $msg = "New Product Created";
        return redirect(url('admin/add-product'))
            ->with('status', $msg);
    }
}

