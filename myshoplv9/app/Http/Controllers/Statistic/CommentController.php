<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic\Comment;
class CommentController extends Controller
{
    //
    public function index() {
        $comments= Comment::all();

        return response()->json([
            'comments'=> $comments,
        ], 200);
    }

    public function create(Request $request) {
        if (auth('sanctum')->check()) {
            $user= $request->user();
            $newComment= new Comment();
            $newComment->user_id= $user->id;
            $newComment->product_id= $request->productId;
            $newComment->parent_id= $request->parentId;
            $newComment->content= $request->content;
            $newComment->rating= $request->rating;
            $newComment->email= $user->email;
            $newComment->name= $user->name;
            $newComment->save();
        }else {
            $newComment= new Comment();
            $newComment->product_id= $request->productId;
            $newComment->parent_id= $request->parentId;
            $newComment->content= $request->content;
            $newComment->rating= $request->rating;
            $newComment->email= $user->email;
            $newComment->name= $user->name;
            $newComment->save();
        }

        return response()->json([
            'created'=> true,
        ], 200);
    }

    public function update(Request $request) {
        $comment= Comment::findOrFail($request->id);
        $comment->content= $request->content;
        $comment->status= $request->status;
        $comment->save();

        return response()->json([
            'updated'=> true,
        ]);
    }

    public function delete() {
        $comment= Comment::findOrFail($request->id);
        $comment->delete();

        return response()->json([
            'deleted'=> true,
        ]);
    }

    public function changeStatus(Request $request) {
        $comment= Comment::findOrFail($request->id);
        $comment->status= $request->status;
        $comment->save();

        return response()->json([
            'done'=> true,
        ], 200);
    }

    public function productComments(Request $request) {
        $comments= Comment::where('product_id', $request->id)->get();

        return response()->json([
            'comments'=> $comments,
        ], 200);
    }
}
