<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->parent_id = $request->comment_id ?? null;
        $comment->user()->associate($request->user());
        $post = Post::findOrFail($request->post_id);
        $post->comments()->save($comment);

        return back();
    }
}
