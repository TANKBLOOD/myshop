<?php

namespace App\Http\Controllers\presentable;

use App\Http\Controllers\Controller;
use App\Models\Presentable\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function index() {
        $tags= Tag::all();
        return response()->json([
            'tags'=> $tags,
        ], 200);
    }

    public function create(Request $request) {
        $newTag= new Tag();
        $newTag->name= $request->name;
        $newTag->save();

        return response()->json([
            'id'=> $newTag->id,
        ], 200);
    }
}
