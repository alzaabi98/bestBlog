<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostsController extends Controller
{
    public function index() {
        //$posts = Post::take(5)->get() ;
        //$posts= DB::select('select * from posts');
        $posts = Post::orderBy('id', 'desc')->paginate(5) ;
        $count = Post::count();
        return view('posts.index', compact('posts','count'));
    }

}
