<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    view('welcome');
});

Route::get('/contact', function () {
    return '<h1>Contact us at mail@bookmark.com</h1>';
});

Route::get('/example', function(){
    return response()->json([
        'title'=>'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald'
    ]);
});

Route::get('/books', ['App\Http\Controllers\BookController', 'index']);
Route::get('/books/title', ['App\Http\Controllers\BookController', 'show']);

Route::get('/books/{title}', function ($title){
    //return 'This is the dtails for hte book: ' . $title;
    return'show';
});

Route::get('/filter/{catgroy}/{subcatgory}', function ($catgory, $subcatgory) {
    return 'Show all books in thse catgories:' . $catgory . ' , ' . $subcatgory;
});