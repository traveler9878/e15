@extends('layouts/main')

@section('head')
    <link href='/css/lists/show.css' rel='stylesheet'>
@endsection

@section('title')
    Your List
@endsection

@section('content')

    @if ($books->count() == 0)
        <p>You have not added any books to your list yet.</p>
        <p><a href='/books'>Find books to add in our library...</a></p>
    @else
        @foreach ($books as $book)
            <div class='book'>
                <a href='/books/{{ $book->slug }}'>
                    <h2>{{ $book->title }}</h2>
                </a>

                @if ($book->author)
                    <p>By {{ $book->author->first_name . ' ' . $book->author->last_name }}</p>
                @endif

                {{-- In the following code, observe how `$book->pivot` is used to access 
            details (`created_at` and `notes`) from the book to user relationship --}}

                <form method='POST' action='/books/{{ $book->slug }}/update'>
                    <textarea class='notes'>{{ $book->pivot->notes }}</textarea>
                    <input type='submit' class='btn btn-primary' value='Update notes'>
                    {{-- TODO: Finish the update note feature --}}
                </form>
                @if ($book->isOnList)
                    <p class='added'>
                        Added {{ $book->pivot->created_at->diffForHumans() }}
                    </p>
                @else
                    {{-- TODO: Finish the “Remove from list” feature --}}

                    <a href='/books/{{ $book->slug }}/destroy'><i class='fa fa-minus-circle'></i> Remove from your
                        list</a>
                @endif
            </div>
        @endforeach
    @endif

@endsection
