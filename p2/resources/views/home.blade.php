@extends('layouts/main')

@section('title')
    Notes to Self.
@endsection


@section('head')
    <h1>Daily Notes</h1>
@endsection

@section('content')
    <form method='post' action='/notes'>
        <div class='details'>* Required fields</div>
        <br>
        {{ csrf_field() }}

        <label for='summary'>* Today's Summary:</label>
        <br>
        <input type='text' name='summary' id='summary' size='80' value='{{ old('summary') }}'>
        <br><br>

        <label for="rating">* Today's Rating:</label>
        <br>
        <input type='text' name='rating' id='rating' value='{{ old('rating') }}'>
        <br><br>

        <label for='detail'>Today's Description and Details:</label>
        <br>
        <textarea name='detail' cols='60' rows='8'>
        {{ old('detail') }}
        </textarea>
        <br><br>


        <label for='active'>* Active</label>
        <br>
        <input type="radio" id="yes" name="active" value="y"
            {{ old('active') == 'y' ? 'checked' : 'checked' }}>
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="active" value="n" {{ old('active') == 'n' ? 'checked' : '' }}>
        <label for="no">No</label><br>


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
