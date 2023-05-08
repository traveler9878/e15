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
        <a href='/read?id={{ $note->id }}'test='detail-link'>details</a>
        <a href='/hide?id={{ $note->id }}' test='hide-link'>hide</a>
        <a href='/delete?id={{ $note->id }}' test='delete-link'>delete</a>
    @endforeach
@endsection
