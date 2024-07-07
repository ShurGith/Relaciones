<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function create($id)
    {
        $post = Post::find($id);
        return view("comment.create", compact('post'));
    }
    public function edit(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request, Comment $comment)
    {
        // $post = $comment->post;
        // dd($post->id);
        $comment->delete();
        return redirect()->back();
    }

}
