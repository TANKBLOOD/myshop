<?php

namespace App\Http\Controllers\presentable;

use App\Http\Controllers\Controller;
use App\Models\Presentable\Product;
use App\Models\Relators\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = Product::with('category')->paginate(3);
        $products = Product::getAllWithPopularityStatus();


        return response()->json([
            'products' => $products,
        ]);
    }

    public function indexPage()
    {
        return view('admin.panel.product.product-index');
    }

    public function createForm()
    {
        $categories = Category::all();
        return view('admin.panel.product.product-create', [
            'categories' => $categories,
        ]);
    }

    public function create(Request $request)
    {

        // dd($request);
        $newProduct = new Product();

        $newProduct->user_id = 1; // change this when the authentication system completed.
        // $newProduct->category_id = $request->category_id;
        $cats = array();
        foreach ($request->category_id as $value) {
            array_push($cats, intval($value));
        }
        // return $request->category_id;
        $newProduct->title = $request->title;
        $newProduct->meta_title = $request->meta_title;
        $newProduct->slug = Str::slug($request->title);
        $newProduct->summary = $request->summary;
        $newProduct->price = $request->price;
        $newProduct->discount = $request->discount;
        $newProduct->quantity = $request->quantity;
        $newProduct->publish = $request->publish == 'draft' ? 0 : 1;
        $newProduct->out_of_stack = $request->out_of_stack ? 1 : 0;
        $newProduct->product_specifications = $request->productSpecifications;
        $newProduct->content = $request->content;

        $imagesName = array();
        // avatar_image
        $name = $newProduct->slug . "-product_image" . uniqid() . "." . $request->avatar_image->clientExtension();
        $path = $request->avatar_image->storeAs('public/images/products/', $name);
        $newProduct->avatar_image = $name;

        foreach ($request->images as $imageFile) {
            $name = $newProduct->slug . "-product_image" . uniqid() . "." . $imageFile->clientExtension();
            $path = $imageFile->storeAs('public/images/products/', $name);
            array_push($imagesName, $name);
        }
        $newProduct->images = $imagesName;

        $newProduct->save();

        $newProduct->category()->sync($request->category_id);

        // $newProduct->tags()->sync($request->tags);

        return response()->json([
            'newProduct' => $newProduct,
        ]);
    }

    public function editForm($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.panel.product.product-edit', [
            'categories' => $categories,
            'product' => $product,
        ]);
    }
    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);

        // $newProduct->user_id = 1; // change this when the authentication system completed.
        // $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->meta_title = $request->meta_title;
        $product->slug = Str::slug($request->title);
        $product->summary = $request->summary;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->publish = $request->publish == 'draft' ? 0 : 1;
        $product->out_of_stack = $request->out_of_stack ? 1 : 0;
        $product->product_specifications = $request->productSpecifications;
        $product->content = $request->content;

        $imagesName = array();
        // avatar_image
        //todo:
        //delete the previous image if exists.
        if (isset($request->avatar_image) && Storage::exists('/public/images/products/' . $product->avatar_image)) {
            Storage::delete('/public/images/products/' . $product->avatar_image);
        }
        if (isset($request->avatar_image)) {
            $name = $product->slug . "-product_image" . uniqid() . "." . $request->avatar_image->clientExtension();
            $path = $request->avatar_image->storeAs('public/images/products/', $name);
            $product->avatar_image = $name;
        }

        if (isset($request->images)) {
            foreach ($product->images as $imageFile) {
                if (Storage::exists('/public/images/products/' . $product->imageFile)) {
                    Storage::delete('/public/images/products/' . $product->imageFile);
                }
            }
            foreach ($request->images as $imageFile) {
                $name = $product->slug . "-product_image" . uniqid() . "." . $imageFile->clientExtension();
                $path = $imageFile->storeAs('public/images/products/', $name);
                array_push($imagesName, $name);
            }
            $product->images = $imagesName;
        }


        $product->save();

        $product->category()->sync($request->category_id);

        return response()->json([
            'product' => $product,
        ]);
    }

    public function categoryProducts(Category $category)
    {
        $categoryProducts = $category->products;

        return response()->json([
            'categoryProducts' => $categoryProducts,
        ]);
    }
    public function getImage($name)
    {
        $pathToFile = 'app/public/images/products/' . $name;
        return response()->file(storage_path($pathToFile));
    }

    public function view(Product $product)
    {

        return response()->json([
            'product' => $product,
            'categories' => $product->category,
        ]);
    }

    public function show(Product $product)
    {
        // dd($product);
        return view('shop.product.product-show', [
            'product' => $product,
        ]);
    }

    public function popularList()
    {
        $products = DB::table('popular_products')->join('products', 'products.id', '=', 'popular_products.product_id')->get();

        return response()->json([
            'products' => $products,
        ]);
    }

    public function makePopular(Request $request)
    {
        $productId = $request->id;
        if (DB::table('popular_products')->where('product_id', $productId)->exists()) {
            return response()->json([
                'status' => 'exists',
            ]);
        } else {
            DB::table('popular_products')->insert([
                'product_id' => $productId,
            ]);

            return response()->json([
                'status' => 'one row inserted.',
            ]);
        }
    }
    public function removePopular(Request $request)
    {
        $productId = $request->id;
        if (DB::table('popular_products')->where('product_id', $productId)->exists()) {

            DB::table('popular_products')->where('product_id', $productId)->delete();
            return response()->json([
                'status' => 'one row deleted.',
            ]);
        } else {

            return response()->json([
                'status' => 'not exists',
            ]);
        }
    }

    public function search($term = '')
    {
        if ($term === '') {
            return response()->json([
                'status' => 'no term specified.',
            ]);
        }
        $products = Product::where('title', 'LIKE', '%' . $term . '%')
            ->orWhere('meta_title', 'LIKE', '%' . $term . '%')
            ->orWhere('product_specifications', 'LIKE', '%' . $term . '%')
            ->with('category')->get();

        return response()->json([
            'products' => $products,
        ]);
    }

    public function delete(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->delete();

        return response()->json([
            'deleted' => true,
        ], 200);
    }

    public function uploadProductImage(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the storage/app/public directory (you may need to link the public/storage directory)
            $image->storeAs('public/productFiles', $imageName);

            // Return the image URL to TinyMCE
            return response()->json([
                'location' => '/product/getImage/' . $imageName,
            ]);
        }

        return response()->json(['error' => 'Invalid image'], 400);
    }

    public function getFile($filename)
    {
        //auth
        $filePath = storage_path('app/public/productFiles/' . $filename);
        // dd($filePath);
        if (!file_exists($filePath)) {
            abort(403, 'File not found');
        }

        // Determine the MIME type of the file
        $mimeType = mime_content_type($filePath);

        // Get the file contents
        $fileContents = file_get_contents($filePath);

        // Return the file contents with the appropriate MIME type
        return response($fileContents)->header('Content-Type', $mimeType);
    }

    public function similarProducts(Product $product)
    {
        $categoryIds = $product->category->pluck('id');

        // Then eager load the categories when getting products
        $similarProducts = Product::with('category')
            ->whereHas('category', function ($q) use ($categoryIds) {
                $q->whereIn('category_id', $categoryIds);
            })
            ->limit(10)
            ->get();

        return response()->json([
            'similarProducts' => $similarProducts,
        ]);
    }

    public function getCategoryProducts(Request $request, $slug) {
        $category= Category::where('slug', $slug)->first();

        $products= $category->products;

        return view('shop.product.category-products', [
            'category'=> $category,
            'products' => $products
        ]);
    }

    public function searchProducts(Request $request, $term) {
        $products = Product::where('title', 'LIKE', '%' . $term . '%')
            ->orWhere('meta_title', 'LIKE', '%' . $term . '%')
            ->with('category')->get();

            return view('shop.product.product-search', [
                'products' => $products,
                'term' => $term
            ]);
    }
}
