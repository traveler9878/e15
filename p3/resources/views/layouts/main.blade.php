<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title')
        My Daily Notes
    </title>
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

    @yield('head')
</head>

<body>
    <header>

        <h1>My Daily Notes and Ratings</h1>
    </header>

    <section>
        @yield('content')
    </section>
    <br><br>
    <footer>
        &copy; David Curtis E15 Project 2
    </footer>
