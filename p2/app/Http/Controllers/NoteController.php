<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        //Validate the form data, if it fails it will return to /home
        $request->validate([
            'summary' => 'required|min:4',
            'stars' =>  'required',
            'rating' => 'required',
            'active' => 'required'
        ]);
       //dump($request->all());
       $_SESSION['request'] = $request;
       return view('read');
    }
}