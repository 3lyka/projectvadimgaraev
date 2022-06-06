<?php

namespace App\Http\Controllers\Info;

/* use App\Http\Requests\StoreRequest; */

use App\Http\Controllers\Controller;
use App\Models\Info;

class ShowController extends Controller
{


	public function __invoke(Info $infos)
	{
		return view('info.show', compact('info'));
	}
}
