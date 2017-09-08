<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Policies\PostPolicy;
use App\Post;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Request $request, Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $post = new Post($request->all());
        $user->posts()->save($post);

        return redirect(route('posts.index'));
    }

    public function edit(Request $request, Post $post)
    {
        if (!Auth::user()->can('update', $post))
        {
            echo "permissão negada";
            exit;
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (!Auth::user()->can('update', $post))
        {
            echo "permissão negada";
            exit;
        }

        $post->update($request->all());

        return redirect(route('posts.index'));
    }

    public function delete(Request $request, Post $post)
    {
        if (!Auth::user()->can('delete', $post))
        {
            echo "permissão negada";
            exit;
        }

        $post->delete();

        return redirect(route('posts.index'));
    }
}
