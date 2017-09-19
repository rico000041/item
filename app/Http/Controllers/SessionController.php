<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Post;

class SessionController extends Controller
{

	public function __construct(){

	//$this->middleware('guest',['except' => 'destroy']);
	}

    public function index(){

    	return view('sessions.login');
        
    }
    public function login(){



    	if(auth()->check()){
    		
            $posts = Post::latest()->get();
        
            return view('pages.homepage',compact('posts'));

    	}
    	else{

    		if(! auth()->attempt(request(['email','password'])))
    			{
    		

    			return back()->withErrors([
    			'message' => 'Email or Password Incorrect'

    			]);
    		

    		}

	    	else{

                
                $posts = Post::latest()->get();
        
                 return view('pages.homepage',compact('posts'));
	    		}
    	}

    	
    }


     public function destroy(){
    	
     		if(auth()->check()){
     			auth()->logout();
    			return view('sessions.login');
     		}
     		else{
     			return view('sessions.login');
     		}
    	

    	

    	
        
    }
}
