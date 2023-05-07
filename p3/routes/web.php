<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/test', function(){
    return 'test';
});

Route::get('/mynotes', [NoteController::class, 'retrieveAll']);

Route::get('/index', function(){
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Route::post('/notes', [NoteController::class, 'store']);

Route::get('/read', [NoteController::class, 'retrieveOne']);

Route::get('/delete', [NoteController::class, 'delete']);

Route::post('/delete', [NoteController::class, 'destroy']);

Route::get('/hide', [NoteController::class, 'hide']);