<?php

namespace App\Http\Controllers\Manager;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCategory(config('constants.manager.limit_paginate'));
        return view('pages.manager.posts.index', compact('posts'));
    }

    public function create()
    {

        $categories = Category::all();
        return view('pages.manager.posts.create', compact('categories'));
    }

    public function store(PostRequest $request)
    {
        $post = Post::make($request->only(
            [
                'title',
                'body',
                'category_id'
            ]
        ));

        $post->saveOrFail();

        return redirect()->route('manager.posts.index')->with(
            'message',
            "Post create!"
        );

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('pages.manager.posts.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect()->route('manager.posts.index')->with(
            'message',
            "Post edit!"
        );
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('manager.posts.index')->with(
            'message',
            "Post deleted!"
        );
    }
}
