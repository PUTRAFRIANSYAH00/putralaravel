<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Method index
    public function index()
    {
        return view('posts',[
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    // Method show
    // Post $post diambil dari web.php
    public function show(Post $post)
    {
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }

}