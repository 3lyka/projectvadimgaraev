<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Post;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index() {
    $infos = Info::all();
    return view('info.index' , compact('infos'));
    }
    public function show(Info $info) {
        return view('info.show', compact('info'));
        }


}
