<?php

namespace App\Http\Controllers\presentable;

use App\Http\Controllers\Controller;
use App\Models\Presentable\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index() {
        $products= Product::all();

        return response()->json([
            'products'=> $products,
        ]);
    }
    public function create(Request $request) {
        // title: "",
        // meta_title: "",
        // category_id: 0,
        // price: "",
        // discount: "",
        // summary: "",
        // quantity: "",
        // publish: "draft",
        // productSpecifications: {},
        // out_of_stack: false,

        $newProduct= new Product();

        $newProduct->user_id= 1;// change this when the authentication system completed.
        $newProduct->category_id= $request->category_id;
        $newProduct->title= $request->title;
        $newProduct->meta_title= $request->meta_title;
        $newProduct->slug= Str::slug($request->title);
        $newProduct->summary= $request->summary;
        $newProduct->price= $request->price;
        $newProduct->discount= $request->discount;
        $newProduct->quantity= $request->quantity;
        $newProduct->publish= $request->publish == 'draft' ? 0 : 1;
        $newProduct->out_of_stack= $request->out_of_stack ? 1 : 0;
        $newProduct->product_specifications= $request->productSpecifications;

        $imagesName= array();
        // avatar_image
        $name = $newProduct->slug."-product_image" . uniqid().".".$request->avatar_image->clientExtension();
        $path = $request->avatar_image->storeAs('public/images/products/', $name);
        $newProduct->avatar_image= $name;

        foreach($request->images as $imageFile) {
            $name = $newProduct->slug."-product_image" . uniqid().".".$imageFile->clientExtension();
            $path = $imageFile->storeAs('public/images/products/', $name);
            array_push($imagesName, $name);
        }
        $newProduct->images= $imagesName;

        $newProduct->save();

        return response()->json([
            'newProduct'=> $newProduct,
        ]);

    }
    public function getImage($name)
    {
        $pathToFile = 'app/public/images/products/'.$name;
        return response()->file(storage_path($pathToFile));
    }

    public function view(Product $product) {

        return response()->json([
            'product'=> $product,
        ]);
    }
}
