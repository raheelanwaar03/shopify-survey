<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LuckyDraw;
use Illuminate\Http\Request;

class LuckyDrawController extends Controller
{

    public function luckyDraw()
    {
        return view('admin.luckydraw.add');
    }

    public function storeLuckyDraw(Request $request)
    {
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('products'), $imageName);

        $product = new LuckyDraw();
        $product->item_name = $request->item_name;
        $product->des = $request->des;
        $product->invest = $request->invest;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('Admin.All.Lucky.Product')->with('success', 'Product added successfully');
    }

    public function allLuckyProducts()
    {
        $product = LuckyDraw::get();
        return view('admin.luckydraw.all', compact('product'));
    }
}
