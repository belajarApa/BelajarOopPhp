<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\user1;
use Illuminate\Http\Request;

class controller_nav extends Controller
{
    public function index(){
        return view('index',[
            'title' => '/',
            'data' => category::all(),
            'post' => post::with(['user1', 'category'])->latest()->get(),
        ]);
}
public function post(post $post){
    return view('post', [
        'title' => 'post',
        'data' => category::all(),
        'post' => $post->load('category', 'user1'),
    ]);
}
public function category(category $category){
        return view('category',[
            'title' => $category->name,
            'posts' => $category->post->load('category', 'user1'),
            'data'=>category::latest()->get()
        ]);
    }
public function author(user1 $author){
        return view('author',[
            'title' => $author->name,
            'posts' => $author->post->load('category', 'user1'),
            'data'=>category::latest()->get()
        ]);
    }

}
