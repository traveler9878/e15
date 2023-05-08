<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title')
        My Daily Notes
    </title>
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

        #navlink {
            color: red;
            margin: 10px;
        }
    </style>
    @if (Auth::user())
        <h2>
            Hello {{ Auth::user()->name }}!
        </h2>
        <form method='POST' id='logout' action='/logout'>
            {{ csrf_field() }}
            <a id='navlink' href='/' test='home-link'>Home</a>
            <a id='navlink' href='/mynotes' test='mynotes'>My Notes</a>
            <a id='navlink' href='#' test='logout-link'
                onClick='document.getElementById("logout").submit();'>Logout</a>
        @else
            <?php
            
            header('Location: http://e15p3.davidcurtis.me/login');
            // or die();
            exit();
            
            ?>
    @endif

    </form>
    <br>
    <meta charset='utf-8'>


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
        &copy; David Curtis E15 Project 3
    </footer>
