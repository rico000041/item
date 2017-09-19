<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post){

    	$comment = request('commentBody');
    	$id = auth()->id();
    	$item = $post->id;
    	


    	
        Comment::create([	

            'body' => $comment,
            'user_id' => $id,
            'post_id' => $item

            ]);
        return back();

    }
}
