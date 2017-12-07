<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(){
    $posts=Post::all();
    return view ('posts.index',compact('posts'));
}
//public function show(){
//    return view ('posts.show');
//}
public function create(){
    return view ('posts.create');
}
    public function store(){


    Post::create(request(['title','content','user_id'
    ]));

    return redirect ('/');
    }
}
