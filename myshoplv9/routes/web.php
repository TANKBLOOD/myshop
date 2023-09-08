<?php

use App\Http\Controllers\PageComponents\MainSliderController;
use App\Http\Controllers\presentable\ProductController;
use App\Http\Controllers\Relators\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myimage/{name}', [CategoryController::class, 'getImage']);
Route::get('/product/image/{name}', [ProductController::class, 'getImage']);
Route::get('/mainSlider/image/{name}', [MainSliderController::class, 'getImage']);

// Route::get('/megaMenuCats', [CategoryController::class, 'megaMenu']);


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
Route::get('/admin/post/create', [ProductController::class, 'createForm'])->name('admin.product.create');
Route::get('/admin/product/index', [ProductController::class, 'indexPage'])->name('admin.product.index');
Route::get('/admin/product/indexData', [ProductController::class, 'index'])->name('admin.product.indexData');
Route::get('/admin/product/search/{term}', [ProductController::class, 'search'])->name('admin.product.search');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'editForm'])->name('admin.product.editForm');
Route::post('/admin/product/update', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/product/delete', [ProductController::class, 'delete'])->name('admin.product.delete');

Route::post('/upload/product/image',[ProductController::class, 'uploadProductImage'])->name('product.upload.image');
Route::get('/product/getImage/{filename}', [ProductController::class, 'getFile'])->name('product.getfile');
Route::post('/admin/product/store', [ProductController::class, 'create'])->name('admin.product.store');

