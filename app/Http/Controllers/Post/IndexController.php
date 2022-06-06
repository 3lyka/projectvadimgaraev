<?php

namespace App\Http\Controllers\Post;

/* use App\Http\Requests\StoreRequest; */

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
	public function __invoke()
	{
		// $post = Post::find(1); вызов конкретного айди
		$posts = Post::paginate(12);
		return view('post.index', compact('posts'));
	}
}
