@extends('layouts/main')

@section('title')
@endsection


@section('head')
@endsection
@section('content')
    @foreach ($notes as $note)
        ================================================================
        Rating: {{ $note->rating }}<br>
        Summary: {{ $note->short_description }}<br>
        <a href='/read?id={{ $note->id }}'>details</a>
        <a href='/hide?id={{ $note->id }}'>hide</a>
        <a href='/delete?id={{ $note->id }}'>delete</a>
    @endforeach
@endsection
