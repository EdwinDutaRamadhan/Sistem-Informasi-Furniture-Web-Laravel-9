<?php

use App\Http\Controllers\Shop;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
Route::get('/', function(){
    return redirect('/home');
});
Route::get('/home', [ProdukController::class, 'index']);
Route::resource('/home/shop', Shop::class);
Route::post('/home/shop/',[ProdukController::class, 'show']);
