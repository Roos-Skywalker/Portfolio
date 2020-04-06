<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        $post = Post::findOrFail($id);

        return view('posts.show', [
           'post' => $post
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'slug' => 'required',
            'title' => ['required', 'min:1', 'max:30'],
            'body' => 'required'
        ]);

        //dump(request()->all()); Debugs this method, remove the redirect to make it work
        // Saves/persists the new post
        $post = new Post();
        $post->slug = request('slug');
        $post->title = request('title');
        $post->body = request('body');

        $post->save();
        return redirect('/blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = Post::findOrFail($id);
        $post->slug = request('slug');
        $post->title = request('title');
        $post->body = request('body');

        $post->save();
        return redirect('/blog/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
