<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return  view('posts.index');
    }
    public function create(){
        return view('posts.create');
    }
    public function show($post,$category=null){
        return view('post.show',[
            'post'=>$post,
            'category'=>$category
        ]);
    }
}
