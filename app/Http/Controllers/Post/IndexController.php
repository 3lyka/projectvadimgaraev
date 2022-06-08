<?php

namespace App\Http\Controllers\Post;

/* use App\Http\Requests\StoreRequest; */

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Post;

class IndexController extends Controller
{
	public function __invoke(FilterRequest $filterRequest)
	{
		// $post = Post::find(1); вызов конкретного айди
/* 		$posts = Post::paginate(12);
		return view('post.index', compact('posts')); */
		$data = $filterRequest->validated();
		dd($data);
		$post = Post::where('is_published', 1)
		->where('category_id', 5)
		->get();

	}
}
