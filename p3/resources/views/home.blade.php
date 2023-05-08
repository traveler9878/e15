@extends('layouts/main')

@section('title')
@endsection


@section('head')
@endsection

@section('content')
    @if (count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method='post' action='/notes'>
        <div class='details'>* Required fields</div>
        <br>
        {{ csrf_field() }}

        <label for='submit'>Click to Add Note</label>
        <input type='submit'>
        <br><br>

        <label for='summary'>* Today's Summary:</label>
        <br>
        <input type='text' name='summary' id='summary' size='80' value='{{ old('summary') }}'>
        <br><br>


        <label for='stars'>* Rating Stars</label>
        <br>
        <input type="radio" id="5star" name="stars" value="5" {{ old('stars') == '5' ? 'checked' : '' }}>
        <label for="5star">5 Stars</label><br>

        <input type="radio" id="4star" name="stars" value="4" {{ old('stars') == '4' ? 'checked' : '' }}>
        <label for="4star">4 Stars</label><br>

        <input type="radio" id="3star" name="stars" value="3"
            {{ old('stars') == '3' ? 'checked' : 'checked' }}>
        <label for="3star">3 Stars</label><br>

        <input type="radio" id="2star" name="stars" value="2" {{ old('stars') == '2' ? 'checked' : '' }}>
        <label for="2star">2 Stars</label><br>

        <input type="radio" id="1star" name="stars" value="1" {{ old('stars') == '1' ? 'checked' : '' }}>
        <label for="1star">1 Star</label><br>
        <br>


        <label for="hashtags">* Today's Rating Hashtags:</label>
        <br>
        <input type='text' name='hashtags' id='hashtags' size='80' value='{{ old('hashtags') }}'>
        <br><br>

        <label for='detail'>* Today's Description and Details:</label>
        <br>
        <textarea name='detail' cols='80' rows='3'>{{ old('detail') }}</textarea>
        @if (Auth::user())
            <input name='user_name' type=hidden value='{{ Auth::user()->name }}'>
        @endif
        <br><br>


        <label for='active'>* Active</label>
        <br>
        <input type="radio" id="yes" name="active" value="1"
            {{ old('active') == '1' ? 'checked' : 'checked' }}>
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="active" value="0" {{ old('active') == '0' ? 'checked' : '' }}>
        <label for="no">No</label><br>




    </form>
@endsection
