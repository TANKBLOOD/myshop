<?php

namespace App\Http\Controllers\Relators;

use App\Http\Controllers\Controller;
use App\Models\Relators\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class CategoryController extends Controller
{

    public function indexPage()
    {
        $categories = Category::all();

        return view('admin.panel.category.category-index', [
            'categories' => $categories,
        ]);
    }
    public function index()
    {
        $categories = Category::paginate(30);
        return response()->json([
            'categories' => $categories,
        ]);
    }

    public function create(Request $request)
    {
        $newCat = new Category();
        $newCat->parent_id = $request->catParent;
        $newCat->title = $request->catTitle;
        $newCat->meta_title = $request->catMetaDescription;
        $newCat->content = $request->catDescription;
        $newCat->slug = Str::slug($request->catTitle);
        //upload the image here.

        $name = $newCat->slug . "-category_image" . uniqid() . "." . $request->catAvatarImage->clientExtension();
        $path = $request->catAvatarImage->storeAs('public/images/category/', $name);
        $newCat->avatar_image = $name;

        $newCat->save();


        return response()->json([
            'status' => ' we are okay',
            'newCat' => $newCat,
        ]);
    }

    public function store(Request $request)
    {
        $newCat = new Category();
        $newCat->parent_id = $request->catParent;
        $newCat->title = $request->catTitle;
        $newCat->meta_title = $request->catMetaDescription;
        $newCat->content = $request->catDescription;
        $newCat->slug = Str::slug($request->catTitle);
        //upload the image here.

        $name = $newCat->slug . "-category_image" . uniqid() . "." . $request->catAvatarImage->clientExtension();
        $path = $request->catAvatarImage->storeAs('public/images/category/', $name);
        $newCat->avatar_image = $name;

        $newCat->save();


        return response()->json([
            'status' => ' we are okay',
            'newCat' => $newCat,
        ]);
    }

    public function view(Category $category)
    {
        return response()->json([
            'category' => $category,
        ]);
    }
    public function edit(Request $request)
    {
        $updatedCat = Category::findOrFail($request->id);
        $updatedCat->parent_id = $request->catParent;
        $updatedCat->title = $request->catTitle;
        $updatedCat->meta_title = $request->catMetaDescription;
        $updatedCat->content = $request->catDescription;
        $updatedCat->slug = Str::slug($request->catTitle);
        //upload the image here.
        if (isset($request->catAvatarImage) && Storage::exists('/public/images/category/' . $updatedCat->avatar_image)) {
            Storage::delete('/public/images/category/' . $updatedCat->avatar_image);
        }
        if (isset($request->catAvatarImage)) {
            $name = $updatedCat->slug . "-category_image" . uniqid() . "." . $request->catAvatarImage->clientExtension();
            $path = $request->catAvatarImage->storeAs('public/images/category/', $name);
            $updatedCat->avatar_image = $name;
        }

        $updatedCat->save();

        return response()->json([
            'status' => ' we are okay',
            'updatedCat' => $updatedCat,
        ]);
    }

    public function delete(Request $request)
    {
        $cat = Category::findOrFail($request->catId);

        if (Storage::exists('/public/images/category/' . $cat->avatar_image)) {
            Storage::delete('/public/images/category/' . $cat->avatar_image);
        }

        $cat->delete();

        return response()->json([
            'deleted' => true,
        ]);
    }

    public function search(Request $request) {
        $query = $request->input('query');

        if (!$query) {
            // Handle empty search query, e.g., show all results
            $results = Category::all();
        } else {
            // Perform the search on your model, replace 'column_name' with the actual column name to search
            $results = Category::where('title', 'LIKE', '%' . $query . '%')->orWhere('title', 'LIKE', '%' . $query . '%')->get();
        }

        return response()->json([
            'categories'=> $results,
        ]);
    }

    public function getImage($name)
    {
        $pathToFile = 'app/public/images/category/' . $name;
        return response()->file(storage_path($pathToFile));
    }

    public function makeSpecial(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->isSpecial = 1;
        $category->save();

        return response()->json([
            'updated' => true,
        ]);
    }
    public function makeNormal(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->isSpecial = 0;
        $category->save();

        return response()->json([
            'updated' => true,
        ]);
    }

    public function getSpecialCategories()
    {
        $categories = Category::where('isSpecial', 1)->get();

        return response()->json([
            'categories' => $categories,
        ]);
    }

    public function megaMenu()
    {
        $categories = Category::with('children.children')->where('parent_id', 0)->get();

        return response()->json($categories);
    }
}
