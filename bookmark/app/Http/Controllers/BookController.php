<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        #TODO: Query DB for all books
        #Return a view showing all books
        return 'Showing all books...';
    }

    public function show(){
        return view('show');
    }
}