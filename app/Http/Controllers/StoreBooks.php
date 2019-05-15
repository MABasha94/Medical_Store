<?php

namespace App\Http\Controllers;

use App\shop;
use App\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreBooks extends Controller
{
    public function storebook (Request $request){

        $store = new store();
        //On left field name in DB and on right field name in Form/view
        $store->bname = $request->input('bookname');
        $store->bquantity = $request->input('bookquantity');
        $store->bprice = $request->input('bookprice');
        $store->save();

        return view('store');

    }

    public function bookTable (){
        $stores=DB::table("stores")->OrderBy("id","desc")->get();
        return view("table",["stores"=>$stores]);
    }

    public function getBook($id) {
        return view("editprice",["book"=>DB::table("stores")->where("id",$id)->first()]);
    }

    public function editBook (Request $request, $id){
        $newprice=store::find($id);
        $newprice->bprice = $request->get('bookprice');
        $newprice->save();
        return redirect("/store/table");
    }

    public function join_tables(){
        $data = DB::table('stuent_buy_book')
            ->join('shops','stuent_buy_book.st_id','=','shops.id')
            ->join('stores','stuent_buy_book.book_id','=','stores.id')
            ->select('shops.studentname','stores.bname','purchase_price','stuent_buy_book.created_at')
            ->OrderBy("stuent_buy_book.st_id","desc")
            ->get();
        return view("purchasedbook",compact('data'));
    }

//    public function jointables() {
//        return view("/bookpurchases",["students"=>DB::table('users')
//            ->join('users', 'users.id', '=', 'stuent_buy_book.st_id')
//            ->join('stores', 'stores.id', '=', 'stuent_buy_book.book_id')
//            ->select('users.name', 'stores.bname', 'stores.bprice')
//            ->get()]);
//    }

//    public function updateprice(Request $request, store $store){
//        $updateprice = $store::where('id', $store->id)->update([
//            'bprice'->$request->input('bookprice');
//        ]);
//    }

//    public function updateprice ($id,$priceamount){
//        $priceamount = DB::table('stores')->where('id', $id)->update($priceamount);
//        return view("table",["stores"=>$priceamount]);
//    }


//    public function buybook (Request $request){
//
//        $buy = new shop();
//        //On left field name in DB and on right field name in Form/view
//        $buy->studentname = $request->input('stname');
//        $buy->bookno1 = $request->input('book1');
//        $buy->bookno2 = $request->input('book2');
//        $buy->save();
//
//        return view('master');
//
//    }
}
