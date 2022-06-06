<?php

namespace App\Http\Controllers\Info;

/* use App\Http\Requests\StoreRequest; */

use App\Http\Controllers\Controller;
use App\Models\Info;

class IndexController extends Controller
{
	public function __invoke()
	{
		$infos = Info::paginate(12);
		return view('info.index', compact('infos'));
	}
}
