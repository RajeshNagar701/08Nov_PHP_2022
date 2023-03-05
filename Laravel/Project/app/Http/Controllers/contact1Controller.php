<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact1Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
	 
	 // __construct() auto call
    public function __invoke(Request $request)
    {
        return view('frontend.contact');
    }
}
