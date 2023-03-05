<?php


// simple controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact2Controller extends Controller
{
    
	function index()
	{
		return view('frontend.contact');
	}
	
}
