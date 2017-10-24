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

    public function export(Request $request)
    {
        $id_arrays = explode(';', $request->ids);
        //instantiate client
        $client = new \App\Services\CMS\Client;
        //call the function get data
        $client->export($id_arrays);
    }

}
