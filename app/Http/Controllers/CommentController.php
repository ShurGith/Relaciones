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
}
