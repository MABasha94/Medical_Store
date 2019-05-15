<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('master');
});
/* store */
Route::get('store', function () {return view('store'); });
Route::get('shop', function () {return view('shop'); });
Route::get('/editprice/{id}', 'StoreBooks@getBook');
Route::get('purchasedbook', 'StoreBooks@join_tables');
Route::post('/edit/book/{id}', 'StoreBooks@editBook');
Route::post('store', 'StoreBooks@storebook');
Route::get('store/table', 'StoreBooks@bookTable');
/* store */

Route::get('shop', 'ShopBooks@buyBooks');
Route::post('/shop/save', 'ShopBooks@buyBookSave');





