<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\PageComponents\MainSliderController;
use App\Http\Controllers\PageComponents\PagesController;
use App\Http\Controllers\presentable\ProductController;
use App\Http\Controllers\Relators\CategoryController;
use App\Http\Controllers\Shopping\CartController;
use App\Models\Presentable\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'landing'])->name('landingPage');

Route::group(['middleware' => ['admin', 'auth']], function () {
    //user related routes section
    Route::get('/admin/register', [AuthController::class, 'adminRegisterForm'])->name('admin.register.form');
    Route::post('/admin/register', [AuthController::class, 'adminRegister'])->name('admin.register.submit');
    Route::get('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');

    Route::get('/admin/dashboard', function () {
        return view('admin.panel.admin-dashboard');
    });

    //category routes section
    Route::get('/admin/category/index', [CategoryController::class, 'indexPage'])->name('admin.category.index');
    Route::get('/admin/category/indexData', [CategoryController::class, 'index'])->name('admin.category.indexData');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/admin/category/update', [CategoryController::class, 'edit'])->name('admin.category.update');
    Route::delete('/admin/category/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');
    Route::get('/admin/category/search', [CategoryController::class, 'search'])->name('admin.category.search');
    Route::post('/category/makeSpecial', [CategoryController::class, 'makeSpecial']);
    Route::post('/category/makeNormal', [CategoryController::class, 'makeNormal']);

    //product section routes
    Route::get('/admin/product/create', [ProductController::class, 'createForm'])->name('admin.product.create');
    Route::get('/admin/product/index', [ProductController::class, 'indexPage'])->name('admin.product.index');
    Route::get('/admin/product/indexData', [ProductController::class, 'index'])->name('admin.product.indexData');
    Route::get('/admin/product/search/{term}', [ProductController::class, 'search'])->name('admin.product.search');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'editForm'])->name('admin.product.editForm');
    Route::post('/admin/product/update', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/delete', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::post('/admin/products/makePopular', [ProductController::class, 'makePopular']);
    Route::post('/admin/products/removePopular', [ProductController::class, 'removePopular']);

    Route::post('/upload/product/image', [ProductController::class, 'uploadProductImage'])->name('product.upload.image');
    Route::get('/product/getImage/{filename}', [ProductController::class, 'getFile'])->name('product.getfile');
    Route::post('/admin/product/store', [ProductController::class, 'create'])->name('admin.product.store');
});


Route::get('/admin/login', [AuthController::class, 'adminLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.submit');

Route::get('/customer/register', [AuthController::class, 'customerRegisterPage'])->name('customer.register.form');
Route::post('/customer/register', [AuthController::class, 'customerRegister'])->name('customer.register.submit');

Route::get('/customer/login', [AuthController::class, 'customerLoginPage'])->name('customer.login.form');

Route::get('/customer/profile', [ProfileController::class, 'show'])->name('customer.profile.show');

Route::get('/myimage/{name}', [CategoryController::class, 'getImage']);
Route::get('/product/image/{name}', [ProductController::class, 'getImage']);
Route::get('/mainSlider/image/{name}', [MainSliderController::class, 'getImage']);

// Route::get('/megaMenuCats', [CategoryController::class, 'megaMenu']);
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/product/similar/{product}', [ProductController::class, 'similarProducts'])->name('product.similar');

Route::get('/category/{category}/products', [ProductController::class, 'getCategoryProducts'])->name('category.products');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/user/cart/add', [CartController::class, 'addToCart']);
    Route::post('/user/cart/remove', [CartController::class, 'removeFromCart']);
    Route::post('/user/cart', [CartController::class, 'cartInfo']);
});

Route::post('/sendVerificationCode', [AuthController::class, 'sendVerificationCode'])->name('sendVerificationCode');
