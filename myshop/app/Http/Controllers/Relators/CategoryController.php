<?php

namespace App\Http\Controllers\Relators;

use App\Http\Controllers\Controller;
use App\Models\Relators\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories= Category::all();
        return response()->json([
            'categories'=> $categories,
        ]);
    }

    public function create(Request $request) {
        $newCat= new Category();
        $newCat->parent_id= $request->catParent;
        $newCat->title= $request->catTitle;
        $newCat->meta_title= $request->catMetaDescription;
        $newCat->content= $request->catDescription;
        $newCat->slug= Str::slug($request->catTitle);
        //upload the image here.
        $newCat->save();

        return response()->json([
            'status'=> ' we are okay',
            'newCat'=> $newCat,
        ]);
    }

    public function edit(Request $request) {
        $updatedCat= Category::findOrFail($request->id);
        $updatedCat->parent_id= $request->catParent;
        $updatedCat->title= $request->catTitle;
        $updatedCat->meta_title= $request->catMetaDescription;
        $updatedCat->content= $request->catDescription;
        $updatedCat->slug= Str::slug($request->catTitle);
        //upload the image here.
        $updatedCat->save();

        return response()->json([
            'status'=> ' we are okay',
            'updatedCat'=> $updatedCat,
        ]);
    }

    public function delete(Request $request) {
        $cat= Category::findOrFail($request->catId);

        $cat->delete();

        return response()->json([
            'deleted'=> true,
        ]);
    }
}
