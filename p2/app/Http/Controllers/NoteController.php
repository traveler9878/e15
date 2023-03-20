<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        //Validate the form data, if it fails it will return to /home
        $request->validate([
            'summary' => 'required|min:4',
            'rating' => 'required',
            'active' => 'required'
        ]);
        dump($request->all());
    }
}