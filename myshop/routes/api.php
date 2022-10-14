<?php

use App\Http\Controllers\PageComponents\MainSliderController;
use App\Http\Controllers\presentable\ProductController;
use App\Http\Controllers\Relators\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//page components
Route::get('/mainSlider/index', [MainSliderController::class, 'index']);
Route::get('/mainSlider/mainList', [MainSliderController::class, 'mainList']);
Route::post('/mainSlider/create', [MainSliderController::class, 'create']);
Route::post('/mainSlider/update', [MainSliderController::class, 'update']);
Route::post('/mainSlider/delete', [MainSliderController::class, 'delete']);
//category section
Route::get('/category/index', [CategoryController::class, 'index']);
Route::post('/category/create', [CategoryController::class, 'create']);
Route::post('/category/delete', [CategoryController::class, 'delete']);
Route::post('/category/edit', [CategoryController::class, 'edit']);
Route::post('/category/makeSpecial', [CategoryController::class, 'makeSpecial']);
Route::post('/category/makeNormal', [CategoryController::class, 'makeNormal']);
Route::get('/category/specials',  [CategoryController::class, 'getSpecialCategories']);
Route::get('/category/view/{category}', [CategoryController::class, 'view']);
Route::get('/category/{category}/products', [ProductController::class, 'categoryProducts']);

//product Section
Route::get('/product/index', [ProductController::class, 'index']);
Route::post('/product/create', [ProductController::class, 'create']);
Route::get('/product/view/{product}', [ProductController::class, 'view']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::get('/product/search/{term?}', [ProductController::class , 'search']);
Route::get('/products/popular', [ProductController::class, 'popularList']);
Route::post('/products/makePopular', [ProductController::class, 'makePopular']);
Route::post('/products/removePopular', [ProductController::class, 'removePopular']);

