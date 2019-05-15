<?php

namespace App\Http\Controllers;

use App\shop;
use App\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopBooks extends Controller
{
    public function buyBooks()
    {
        $books = store::where("bquantity",">","0")->get();
        return view('shop', ['books' => $books]);
    }

    public function buyBookSave(Request $request)
    {
        $date = date('Y-m-d H:i:s');
        $stId = DB::table("shops")->insertGetId(["studentname"=>$request->stname,"created_at"=>$date]);
        foreach ($request->booksBuy as $item) {
            $itemPrice = DB::table('stores')->where("id",$item)->first();
            DB::table('stores')->where("id",$item)->decrement('bquantity');
            DB::table("stuent_buy_book")->insertGetId(["book_id"=>$item,"st_id"=>$stId,'purchase_price'=>$itemPrice->bprice,'created_at'=>$date]);
        }
        return redirect("/shop");

    }
}
