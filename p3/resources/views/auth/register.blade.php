<!doctype html>
<html lang='en'>

<head>
    <title>
        My Daily Notes
    </title>

    </form>
    <br>
    <meta charset='utf-8'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='/css/app.css' rel='stylesheet'>
    <style>
        body {
            width: 35em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
    </style>

</head>

<body>
    <header>

        <h1>My Daily Notes and Ratings</h1>
    </header>

    <br><br>

    <h1>Register</h1>

    Already have an account? <a href='/login'>Login here...</a>
    <br><br>
    <form method='POST' action='/register'>
        {{ csrf_field() }}

        <label for='name'>Name</label><br>
        <input id='name' type='text' name='name' value='{{ old('name') }}' autofocus>
        @include('includes.error-field', ['fieldName' => 'name'])
        <br><br>
        <label for='email'>E-Mail Address</label><br>
        <input id='email' type='email' name='email' value='{{ old('email') }}'>
        @include('includes.error-field', ['fieldName' => 'email'])
        <br><br>
        <label for='password'>Password (min: 8)</label><br>
        <input id='password' type='password' name='password'>
        @include('includes.error-field', ['fieldName' => 'password'])
        <br><br>
        <label for='password-confirm'>Confirm Password</label><br>
        <input id='password_confirmation' type='password' name='password_confirmation'>
        <br><br>
        <button type='submit' class='btn btn-primary' test='register-button'>Register</button>
    </form>
    <footer>
        &copy; David Curtis E15 Project 3
    </footer>
</body>

</html>
