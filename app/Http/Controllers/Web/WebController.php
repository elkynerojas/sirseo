<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class WebController extends Controller
{

	public function Home(Request $request)
	{
        $user = Auth::user();
        $rol = $user->getRol();
        $user->authorizeRoles(['user','admin']);
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
