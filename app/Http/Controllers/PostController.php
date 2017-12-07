<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){
    return view ('posts.index');
}
//public function show(){
//    return view ('posts.show');
//}
public function create(){
    return view ('posts.create');
}
    public function store(){
// creates a new post using the request data
    $post= new Post;
    $post->title=request('title');
    $post->content=request('content');
        $post->user_id=request('user_id');
    $post->save();

    return redirect ('/');
    }
}
