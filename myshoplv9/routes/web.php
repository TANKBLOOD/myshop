<?php

use App\Http\Controllers\PageComponents\MainSliderController;
use App\Http\Controllers\presentable\ProductController;
use App\Http\Controllers\Relators\CategoryController;
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

//product section routes
Route::get('/admin/post/create', [ProductController::class, 'createForm'])->name('admin.product.create');

