<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        //$posts = Post::all();
        $posts = Post::paginate($request->get('per_page', 20));
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view("post.create");
    }

    public function store(CreatePostRequest $request)
    {
        Post::create($request->all());
        return redirect()->route("index");
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
    public function edit(Post $post)
    {

        return view("post.edit", compact("post"));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route("index");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        //eturn redirect()->back();
        return redirect()->route('index')->with('success', $post->id);
    }

    public function alerta(Request $request, Post $post)
    {
        return redirect()->route('index')->with('alerta', $post->id);
    }
}