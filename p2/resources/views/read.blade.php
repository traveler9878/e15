@extends('layouts/main')

@section('title')
    Daily Log.
@endsection


@section('head')
    <h1>Daily Log Notes</h1>
@endsection

@section('content')
    <?php
    $myRequest = $_SESSION['request'];
    //dump($myRequest->all());
    ?>

    <h3>Today's Summary: {{ $myRequest['summary'] }}</h3>
    <br><br>
    <h3>Today's Rating: {{ $myRequest['rating'] }}</h3>
    <br><br>
    <h3>Today's Description and Details:</h3>
    <br>
    {{ $myRequest['detail'] }}
@endsection
