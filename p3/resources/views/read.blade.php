@extends('layouts/main')

@section('title')
@endsection


@section('head')
@endsection

@section('content')
    <?php
    
    ?>
    <br>
    <h3>Note Created: {{ $note->created_at }}</h3>
    <br>
    <br>
    <h3>Summary: {{ $note->short_description }}</h3>
    <br><br>
    <h3>Rating: {{ $note->rating }} Star Day</h3>
    <br><br>
    <h3>Rating Hashtags: {{ $note->hashtag_list }}</h3>
    <br><br>
    <h3>Description and Details:</h3>
    {{ $note->long_description }}
@endsection
