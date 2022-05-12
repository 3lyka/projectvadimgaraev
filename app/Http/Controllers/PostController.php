<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
       // $post = Post::find(1); вызов конкретного айди
       $posts = Post::all();
    return view('posts', compact('posts'));
    }

    public function create() {
        $postsArr = [
                [
                    'title' => 'title of post from visual studio code',
                    'content' => 'some interesting content',
                    'image' => '',
                    'Likes' => '50',
                    'is_published' => 1,
                ],
                [
                    'title' => ' duble title of post from visual studio code',
                    'content' => 'duble some interesting content',
                    'image' => '',
                    'Likes' => '51',
                    'is_published' => 1,
                    ],
        ];

foreach($postsArr as $item) {
    Post::create($item);
}
dd('done');
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
