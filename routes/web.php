<?php
use App\Product;
use App\Type;
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

Route::get('/', function () {
    return [
        'seller_areas' => App\Seller::with('areas')->get(),
        'area_sellers' => App\Area::with('sellers')->get(),
    ];

});
