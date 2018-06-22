<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class WebController extends Controller
{

	public function Home(Request $request)
	{
		//$request->user()->authorizeRoles(['user']);
    	$user = Auth::user();
        if($user->hasRole('user')){
            $rol = 'user';
        }
        if($user->hasRole('admin')){
            $rol = 'admin';
        }
        $user->authorizeRoles(['user']);
		return view('home',compact('user','rol'));
	}

    public function Welcome()
    {	
    	return view('welcome');
    }

    public function Contact()
    {
        $user = Auth::user();
    	return view('contact',compact('user'));
    }
    public function About()
    {
        $user = Auth::user();
        return view('about',compact('user'));
    }
}
