<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller {
    public function store(Request $request, Product $product)
    {
        $validated = $request->validate([
            'content' => 'required|string'
        ]);
        
        $comment = $product->comments()->create([
            'user_id' => $request->user()->id,
            'content' => $validated['content']
        ]);
        
        return response()->json($comment->load('user'), 201);
    }
    
    public function destroy(Comment $comment)
    {
        if (Gate::denies('delete', $comment)) {
            abort(403);
        }
        
        $comment->delete();
        return response()->json(null, 204);
    }

}
