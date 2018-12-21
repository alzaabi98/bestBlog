<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostsController extends Controller
{
    // index page
    public function index() {
        //$posts = Post::take(5)->get() ;
        //$posts= DB::select('select * from posts');
        $posts = Post::orderBy('id', 'desc')->paginate(5) ;
        $count = Post::count();
        return view('posts.index', compact('posts','count'));
    }

    //show page 

    public function show($id) {

        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

}
