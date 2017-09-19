<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\User;

class PostsController extends Controller
{

    public $file;

    public function show(Post $post){

      return view('show',compact('post'));
    }
   
    public function store(Request $request){

      $category = $_POST['category'];

      $post = new Post;

      $post->body=Input::get('body');
      if(Input::hasFile('file')){
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());

       $post->file=$file->getClientOriginalName();
       


      }


      $post->user_id = auth()->id();
      $post->body = request('body');
      $post->price = request('price');
      $post->name = request('txtname');
      $post->category = $category;


      $post->save();
      
      $posts = Post::latest()->get();
        
      return view('pages.homepage',compact('posts'));


     

   }
   public function edit(){

    $category = $_POST['category'];

    $post = new Post;
    $id = request('postId');

     $post->body=Input::get('body');
      if(Input::hasFile('file')){
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());

     
       $qwe = $file->getClientOriginalName();
       
      }
    

    $update = $post->find($id);
    $update->name = request('txtname');
    $update->body = request('body');
    $update->price = request('price');
    $update->category = $category;
    $update->file = $qwe;
    
    $update->save();


      $posts = Post::latest()->get();
      return view('pages.homepage',compact('posts'));


   }
   public function remove(){
      $post = new Post;
      $id = request('postId');

      $delete = $post->find($id);
      $delete->delete();


      $posts = Post::latest()->get();
      return view('pages.homepage',compact('posts'));

   }

    
}
