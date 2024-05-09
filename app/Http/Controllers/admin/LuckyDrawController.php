<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\LuckyDraw;
use App\Models\admin\Winner;
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
        $product->image = $imageName;
        $product->save();
        return redirect()->route('Admin.All.Lucky.Product')->with('success', 'Product added successfully');
    }

    public function allLuckyProducts()
    {
        $product = LuckyDraw::get();
        $winner = Winner::get();
        return view('admin.luckydraw.all', compact('product', 'winner'));
    }

    public function addWinner()
    {
        return view('admin.luckydraw.winer');
    }


    public function storeWinner(Request $request)
    {
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('winner'), $imageName);

        $winner = new Winner();
        $winner->winner_name = $request->winner_name;
        $winner->item = $request->item;
        $winner->image = $imageName;
        $winner->save();
        return redirect(route('Admin.All.Lucky.Product'))->with('success', 'Winner Added');
    }

    public function deleteProducts($id)
    {
        $product = LuckyDraw::find($id);
        $product->delete();
        return redirect(route('Admin.All.Lucky.Product'))->with('success', 'Product Deleted');
    }

    public function deleteWinner($id)
    {
        $winner = Winner::find($id);
        $winner->delete();
        return redirect()->back()->with('success', 'Winner Deleted');
    }
}
