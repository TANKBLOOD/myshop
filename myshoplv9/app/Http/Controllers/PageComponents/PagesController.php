<?php

namespace App\Http\Controllers\PageComponents;

use App\Http\Controllers\Controller;
use App\Models\Presentable\Product;
use App\Models\Relators\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function landing() {
        $user = Auth::user();
        $specialCategories = Category::where('isSpecial', 1)->get();

        $productsWithDiscount = Product::whereNotNull('discount')->get();

        // Retrieve popular product IDs from the popular_products table
        $popularProductIds = DB::table('popular_products')->pluck('product_id');
        // Retrieve popular products with their details and orders using eager loading
        $popularProducts = Product::whereIn('id', $popularProductIds)->get();

        //get top 12 products based on create date
        $topSellProducts= Product::orderBy('created_at', 'desc')->take(12)->get();


        return view('welcome', [
            'specialCats'=> $specialCategories,
            'productsWithDiscount'=> $productsWithDiscount,
            'popularProducts'=> $popularProducts,
            'topSellProducts'=> $topSellProducts,
            'user'=> $user,
        ]);
    }
}
