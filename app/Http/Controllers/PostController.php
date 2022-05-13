<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
       // $post = Post::find(1); вызов конкретного айди
       $posts = Post::all();
    return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
    }

    public function show(Post $post) {
    return view('post.show', compact('post'));
    }

    public function store() {
        $data = request()->validate([
            'title'     => 'string',
            'content'   => 'string',
            'image'     => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }


public function update() {
    $post = Post::find(1);

    $post->update([
        'title' => 'new title cool'
    ]);
    dd('cool is update');
}
public function delete() {
    $post = Post::withTrashed()->find(1);
    $post->delete();
    dd('delete..');
}
public function restored() {
    $post = Post::withTrashed()->find(1);
    $post->restore();
    dd('restored!');
}
public function firstOrCrete(){
    //просто возможность криэтить, на курсе по блогу узнаю больше
}
}
