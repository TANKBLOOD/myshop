<?php

namespace App\Http\Controllers\PageComponents;

use App\Http\Controllers\Controller;
use App\Models\Presentable\Product;
use App\Models\Relators\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function landing() {
        $specialCategories = Category::where('isSpecial', 1)->get();

        $productsWithDiscount = Product::whereNotNull('discount')->get();

        // Retrieve popular product IDs from the popular_products table
        $popularProductIds = DB::table('popular_products')->pluck('product_id');
        // Retrieve popular products with their details and orders using eager loading
        $popularProducts = Product::whereIn('id', $popularProductIds)->get();

        return view('welcome', [
            'specialCats'=> $specialCategories,
            'productsWithDiscount'=> $productsWithDiscount,
            'popularProducts'=> $popularProducts,
        ]);
    }
}
