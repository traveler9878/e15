<!doctype html>
<html lang='en'>

<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link href='/css/app.css' type='text/css' rel='stylesheet'>
    @yield('head');
</head>

<body>
    <header>
        <a href='/'><img src='/images/mye15logo.png' id='logo' alt='my E15 bookmarks logo'></a>
    </header>

    <section>
        @yield('content');
    </section>

    <footer>
        &copy; My E15 Bookmarks...
    </footer>
