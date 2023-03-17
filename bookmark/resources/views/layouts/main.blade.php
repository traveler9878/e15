<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <!-- Latest Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='/css/app.css' type='text/css' rel='stylesheet'>
    @yield('head');
</head>

<body>
    <header>
        <a href='/'><img src='/images/mye15logo.png' id='logo' alt='my E15 bookmark logo'></a>
    </header>

    <section>
        @yield('content');
    </section>

    <footer>
        &copy; My E15 bookmark footer
    </footer>
