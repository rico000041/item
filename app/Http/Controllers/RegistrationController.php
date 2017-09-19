<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
/*use App\Http\Request\RegistrationRequest;
*/

class RegistrationController extends Controller
{


    public function index(){

    	return view('sessions.register');
    }
    public function store(){

       
    	$this->validate(request(),[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'


    		]);
        

    	$user = User::create([
           
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))


            ]);

    	auth()->login($user);

       /* \Mail::to($user)->send(new WelcomeAgain($user));


        session()->flash('message','Thanks so much!!');*/
    	return redirect()->home();
    }
}
