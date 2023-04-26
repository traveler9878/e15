@extends('layouts/main')

@section('title')
    Add an Author
@endsection

@section('content')
    <h1>Add an Author</h1>


    <form method='POST' action='/authors'>
        <div class='details'>* Required fields</div>

        {{ csrf_field() }}

        <label for='First Name'>* First Name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name') }}'>
        @include('includes/error-field', ['fieldName' => 'first_name'])
        <button type='submit' class='btn btn-primary'>Add Book</button>

        @if (count($errors) > 0)
            <div class='alert alert-danger'>
                Please correct the above errors.
            </div>
        @endif
    </form>
@endsection
