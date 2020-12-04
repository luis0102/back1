<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class listaController extends Controller
{
    //
    public function index(){
        $posts = post::all();
        return $posts;
        return view('posts.index');
    }
}
