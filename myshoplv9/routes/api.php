<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\PageComponents\MainSliderController;
use App\Http\Controllers\presentable\ProductController;
use App\Http\Controllers\Relators\CategoryController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Shopping\CartController;
use App\Http\Controllers\Statistic\SiteViewsController;
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
Route::post('/user/registerAdmin', [ApiAuthController::class, 'registerAdmin']);
Route::post('/user/adminLogin', [ApiAuthController::class, 'loginAdmin']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/adminUser', [ApiAuthController::class, 'adminUser']);
    Route::post('/user/adminLogout', [ApiAuthController::class, 'adminLogout']);
});
Route::post('/user/registerCustomer', [ApiAuthController::class, 'registerCustomer']);
Route::post('/user/CustomerLogin', [ApiAuthController::class, 'loginCustomer']);

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
Route::post('/product/delete', [ProductController::class, 'delete']);
Route::get('/product/search/{term?}', [ProductController::class, 'search']);
Route::get('/products/popular', [ProductController::class, 'popularList']);
Route::post('/products/makePopular', [ProductController::class, 'makePopular']);
Route::post('/products/removePopular', [ProductController::class, 'removePopular']);

//profile section
Route::get('/user/profile/{userId}', [ProfileController::class, 'userProfileInfo']);
Route::post('/user/profile', [ProfileController::class, 'update']);

//cart section
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/cart/add', [CartController::class, 'addToCart']);
    Route::post('/user/cart/remove', [CartController::class, 'removeFromCart']);
    Route::post('/user/cart', [CartController::class, 'cartInfo']);
    Route::get('/user/cart/productCount', [CartController::class, 'getProductCountInUserCart'])->name('user.cart.productCount');
    Route::get('/user/cart/checkout', [CartController::class, 'checkoutCartPage'])->name('user.cart.checkout');
});

Route::post('/statistic/plusProductView', [SiteViewsController::class, 'plusProductView']);
Route::post('/statistic/getProductViewSummary', [SiteViewsController::class, 'getProductViewSummary']);

Route::get('/megaMenuCats', [CategoryController::class, 'megaMenu']);

Route::get('/product/similar/{product}', [ProductController::class, 'similarProducts'])->name('product.similar');
