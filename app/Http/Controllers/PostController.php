<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
       // $post = Post::find(1); вызов конкретного айди
       $posts = Post::all();
    return view('post.index', compact('posts' ));

    }
    

    public function create() {
        return view('post.create');
    }

    public function show(Post $post) {
    return view('post.show', compact('post'));
    }
//Ниже представлена валидация, если ее не заполнить, ну придет такое себе
    public function store() {
        $data = request()->validate([
            'title'     => 'string',
            'content'   => 'string',
            'image'     => 'string'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }


}
