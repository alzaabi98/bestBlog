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

    // create post

    public function create() {

        return view('posts.create');
    }

    //store post

    public function store(Request $request) {

        $request->validate([

            'title' =>  'required|max:200',
            'body' => 'required|max:500'
        ]);

        $post = new Post() ;
        $post->title =  $request->title ;
        $post->body =  $request->body ;

        $post->save();

        return redirect('/posts')->with('status', 'Post was created !');

        
    }

    // edit post form

    public function edit($id) {

        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    // update post form 

    public function update(Request $request, $id) {

        $request->validate([

            'title' =>  'required|max:200',
            'body' => 'required|max:500'
        ]);

        $post = Post::find($id) ;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect('/posts')->with('status', 'Post was updated !');

    }

    //destroy post
    public function destroy($id) {

        $post = POST::find($id) ;
        $post->delete();
        return redirect('/posts')->with('status', 'Post was deleted !');

    }

}
