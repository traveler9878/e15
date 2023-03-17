@extends('layouts/main')

@section('title')
    Notes to Self.
@endsection


@section('head')
    <h1>Add note to Self</h1>
@endsection

@section('content')
    <form method='post' action='/notes'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title') }}'>
        <br><br>

        <label for='note'>Note</label>
        <textarea name='note'>
        {{ old('note') }}
        </textarea>
        <br><br>

        <label for='active'>* Active</label>
        <input type='checkbox' name='active' value='true' checked>

        <br><br>
        <label for='submit'>Click to Add Note</label>
        <input type='submit'>
        <br><br>
        @if (count($errors) > 0)
            <ul class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
@endsection
