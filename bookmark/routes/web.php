<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\App;


/**
 * Misc
 */
Route::get('/', [PageController::class, 'welcome']);
Route::get('/contact', [PageController::class, 'contact']);
Route::any('/practice/{n?}', [PracticeController::class, 'index']);


# Filter route that was used to demonstrate working with multiple route parameters
Route::get('/books/filter/{category}/{subcategory}', [BookController::class, 'filter']);

/**
 * Authors
 */

# Make sure the create route comes before the `/books/{slug}` route so it takes precedence
Route::get('/authors/create', [AuthorController::class, 'create']);

/**
 * Books
 */
Route::get('/books', [BookController::class, 'index']);

# Make sure the create route comes before the `/books/{slug}` route so it takes precedence
Route::get('/books/create', [BookController::class, 'create']);

# Note the use of the post method in this route
Route::post('/books', [BookController::class, 'store']);

# Show the form to edit a specific book
Route::get('/books/{slug}/edit', [BookController::class, 'edit']);

# Process the form to edit a specific book
Route::put('/books/{slug}', [BookController::class, 'update']);

# Process the form to delete a specific book
Route::get('/books/{slug}/delete', [BookController::class, 'delete']);
Route::delete('/books/{slug}', [BookController::class, 'destroy']);

Route::get('/books/{slug}', [BookController::class, 'show']);

Route::get('/search', [BookController::class, 'search']);



/**
 * Lists
 */
Route::get('/list', [ListController::class, 'show']);
Route::get('/list/{slug}/add', [ListController::class, 'add']);

# Only enable the following development-specific routes if we’re *not* running the application in the `production` environment
if (!App::environment('production')) {
    Route::get('/test/login-as/{userId}', [TestController::class, 'loginAs']);
    Route::get('/test/refresh-database', [TestController::class, 'refreshDatabase']);

    # It’s a good idea to move the practice route into this if condition
    # so that our practice routes are not available on production
    Route::any('/practice/{n?}', [PracticeController::class, 'index']);
}