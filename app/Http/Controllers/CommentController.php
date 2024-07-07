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

    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect()->route("show", $request->post_id)->with("success", "200");
    }
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view("comment.edit ", compact("comment"));
    }

    public function update(Request $request, Comment $comment)
    {
        //dd($comment->post_id, $comment->id);
        $comment->update($request->all());
        return redirect()->route('show', $comment->post_id);
    }
    public function destroy(Request $request, Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }

}
