<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function getPost(){
        $post = Post::all();
        return view('posts.post', compact('post'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',['post' => $post,'Danhmucbaiviet'=>$post->Danhmucbaiviet]);
    }
    public function getPosts(){
        $post = Post::all();
        return view('posts.post', compact('post'));
    }
}
