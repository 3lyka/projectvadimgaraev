<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke() {
return view('admin-panel.post.index');
    }



}
