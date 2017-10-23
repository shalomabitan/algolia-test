<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Serve the main single page of this app
     * 
     * @param  Request $request 
     * @return view           
     */
    public function index(Request $request)
    {
        return view('welcome');
    }
}
