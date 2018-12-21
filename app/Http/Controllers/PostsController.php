<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index() {
        //$posts = Post::take(5)->get() ;
        $posts = Post::orderBy('id', 'desc')->get() ;
        $count = Post::count();
        return view('posts.index', compact('posts','count'));
    }

}
