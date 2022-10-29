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

