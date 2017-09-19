<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){


        $posts = Post::latest()->get();
        
    	return view('pages.homepage',compact('posts'));

    }
    public function add(){
    	return view('pages.add');
    }
    public function edit(){
    	return view('pages.edit');
    }
    public function remove(){
    	return view('pages.remove');
    }
}
