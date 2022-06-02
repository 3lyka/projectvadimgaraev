<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
       // $post = Post::find(1); вызов конкретного айди
       $posts = Post::paginate(12);
    return view('post.index', compact('posts' ));

    }
    

    public function create() {
        return view('post.create');
    }

    public function show(Post $post) {
    return view('post.show', compact('post'));
    }
//Ниже представлена валидация, если ее не заполнить, ну придет такое себе
    public function store(StoreRequest $request) {
        $data = $request;
        Post::create($data);
        return redirect()->route('post.index');
    }


}
