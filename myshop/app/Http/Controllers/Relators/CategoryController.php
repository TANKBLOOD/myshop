<?php

namespace App\Http\Controllers\Relators;

use App\Http\Controllers\Controller;
use App\Models\Relators\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories= Category::all();
        return response()->json([
            'categories'=> $categories,
        ]);
    }
}
