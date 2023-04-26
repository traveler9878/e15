<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;

class PracticeController extends Controller
{
    public function practice17(){
        $user = User::where('email', '=', 'jill@harvard.edu')->first();
        $book = $user->books()->first();
        $book->pivot->delete();
        return 'Delete complete. Check the book_user table to confirm.';
    }

    public function practice16(){
        $user = User::where('email', '=', 'jamal@harvard.edu')->first();
        $book = Book::where('title', '=', 'The Martian')->first();
        $user->books()->save($book);
    }
    public function practice15(){
        //$books = Book::all();
        //eager loading to eliminate one trip to database for each book to get users
        $books = Book::with('users')->get();

        foreach($books as $book){
            dump($book->title);
            foreach($book->users as $user){
                dump($user->toArray());
            }
        }
    }
    public function practice14(){
        $book = Book::where('title', '=', 'The Great Gatsby')->first();

        dump($book->users->toArray());
    }
    public function practice13(){
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        dump($user->books->toArray());
    }
    public function practice12(){
        # Eager load the author with the book
$books = Book::with('author')->get();

foreach ($books as $book) {
    if ($book->author) {
        dump($book->author->first_name . ' ' . $book->author->last_name . ' wrote ' . $book->title);
    } else {
        dump($book->title . ' has no author associated with it.');
    }
}

dump($books->toArray());
    }

    public function practice11(){
        # Get an example book
$book = Book::whereNotNull('author_id')->first();

# Get the author from this book using the "author" dynamic property
# "author" corresponds to the the relationship method defined in the Book model
$author = $book->author;

# Output
dump($book->title . ' was written by ' . $author->first_name . ' ' . $author->last_name);
dump($book->toArray());
    }

public function practice10(){
    $author = Author::where('first_name', '=', 'J.K.')->first();

$book = new Book;
$book->slug = 'fantastic-beasts-and-where-to-find-them';
$book->title = "Fantastic Beasts and Where to Find Them";
$book->published_year = 2001;
$book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
$book->info_url = 'https://en.wikipedia.org/wiki/Fantastic_Beasts_and_Where_to_Find_Them';
$book->purchase_url = 'http://www.barnesandnoble.com/w/fantastic-beasts-and-where-to-find-them-j-k-rowling/1004478855';
$book->author()->associate($author); # <--- Associate the author with this book
$book->description = 'Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling (under the pen name of the fictitious author Newt Scamander) about the magical creatures in the Harry Potter universe. The original version, illustrated by the author herself, purports to be Harry Potter’s copy of the textbook of the same name mentioned in Harry Potter and the Philosopher’s Stone (or Harry Potter and the Sorcerer’s Stone in the US), the first novel of the Harry Potter series. It includes several notes inside it supposedly handwritten by Harry, Ron Weasley, and Hermione Granger, detailing their own experiences with some of the beasts described, and including in-jokes relating to the original series.';
$book->save();
dump($book->toArray());
}

//Retrieve the last 2 books that were added to the books table.
public function practice20(){
    # Limit the amount of results a query will return
$result = Book::orderBy('created_at', 'desc')->limit(2)->get();
dump($result->toArray());

}

// Retrieve all the books published after 1950.
public function practice21(){
    $result = Book::where('published_year', '>', '1950')->get();
dump($result->toArray());

}

// Retrieve all the books in alphabetical order by title.
public function practice22(){
    $result = Book::orderBy('title', 'asc')->get();
    dump($result->toArray());
}

// Retrieve all the books in descending order according to published year.
public function practice23(){
    $result = Book::orderBy('published_year', 'desc')->get();
dump($result->toArray());

}

// Find any books by the author “J.K. Rowling” and update the author name to be “JK Rowling”
public function practice24(){
    $books = Book::where('author', '=', 'JK Rowling')->get();
    if( $books ) {
        dump("Book not found, can not update");
    }else{
        foreach($books as $book){
            $book->author = 'J.K. Rowling';
            $book->save();
            dump($book);
        }
    }
    //dump(Book::orderBy('published_year')->get()->toArray());

}

// Remove any/all books with an author name that includes the string “Rowling”.
public function practice25(){
# Delete any rows matching a `where` constraint
$result = Book::where('author', 'LIKE', '*Rowling*')->delete();
dump($result);
}

  function practice5(){
    # First get a book to update
    $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

    if (!$book) {
        dump("Book not found, can not update.");
    } else {
        # Change some properties
        $book->title = 'The Really Great Gatsby';
        $book->published_year = '2025';

        # Save the changes
        $book->save();

        dump('Update complete');
    }
}
    public function practice4()
{
    $book = new Book();
    $books = $book->where('title', 'LIKE', '%Harry Potter%')->get();
    echo($books);
    //dd($books);
    if ($books->isEmpty()) {
        dump('No matches found');
    } else {
        foreach ($books as $book) {
            dump($book->title);
        }
    }
}
    public function practice3()
    {
        # Instantiate a new Book Model object
        $book = new Book();

        # Set the properties
        # Note how each property corresponds to a column in the table
        $book->slug = 'the-martian';
        $book->title = 'The Martian';
        $book->author = 'Anthony Weir';
        $book->published_year = 2011;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
        $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
        $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
        $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        $book->save();

        # Confirm results
        dump('Added: ' . $book->title);
        dump(Book::all()->toArray());
    }
    /**
     * First practice example
     * GET /practice/1
     */
    public function practice1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     * http://bookmark.yourdomain.com.loc/practice => Shows a listing of all practice routes
     * http://bookmark.yourdomain.com.loc/practice/1 => Invokes practice1
     * http://bookmark.yourdomain.com.loc/practice/5 => Invokes practice5
     * http://bookmark.yourdomain.com.loc/practice/999 => 404 not found
     */
    public function index(Request $request, $n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method($request) : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with([
                'methods' => $methods,
                'books' => Book::all(),
                'fields' => [
                    'id', 'updated_at', 'created_at', 'slug', 'title', 'author', 'published_year'
                ]
            ]);
        }
    }
}