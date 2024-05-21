<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcomHomeController;
use App\Http\Controllers\EcomContactController;
use App\Http\Controllers\EcomgalleryController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminproductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ice cream templates routing
route::get('/',[EcomHomeController::class,'index']);
Route::get('/contact-us',[EcomContactController::class,'index']);
Route::post('/contact-us',[EcomContactController::class,'store']);
Route::get('/gallery',[EcomgalleryController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/product',[ProductController::class,'show']);
Route::get('/addcart',[ProductController::class,'viewcart']);


// icecrem admin templates routing
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/admin-dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/manage-contacts',[EcomContactController::class,'show']);
Route::get('/admin-login/manage-contacts/{id}',[EcomContactController::class,'destroy']);
Route::get('/admin-login/add-product',[AdminproductController::class,'index']);
Route::post('/admin-login/add-product',[AdminproductController::class,'store']);
Route::get('/admin-login/manage-product',[AdminproductController::class,'show']);
Route::get('/admin-login/manage-product/{id}',[AdminproductController::class,'destroy']);
Route::get('/admin-login/add-product/{id}',[AdminproductController::class,'edit']);
//Route::get('/admin-login/edit-product/{id}',[AdminproductController::class,'update']);

