<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class WebController extends Controller
{

	public function Home()
	{
		
    	$user = Auth::user();
		return view('home',compact('user'));
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
