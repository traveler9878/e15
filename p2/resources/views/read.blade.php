@extends('layouts/main')

@section('title')
@endsection


@section('head')
@endsection

@section('content')
    <?php
    $myRequest = $_SESSION['request'];
    //dump($myRequest->all());
    ?>
    <br>
    <h3>Today's Summary: {{ $myRequest['summary'] }}</h3>
    <br><br>
    <h3>Today's Rating: {{ $myRequest['stars'] }} Star Day</h3>
    <br><br>
    <h3>Today's Rating Hashtags: {{ $myRequest['rating'] }}</h3>
    <br><br>
    <h3>Today's Description and Details:</h3>
    <br>
    {{ $myRequest['detail'] }}
@endsection
