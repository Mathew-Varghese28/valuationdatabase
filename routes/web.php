<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;

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

Route::get("/product",[productcontroller::class,'create']);
Route::post("/productread",[productcontroller::class,'store']);
Route::get("/viewallproduct",[productcontroller::class,'index']);
Route::post("/productsearch",[productcontroller::class,'search']);