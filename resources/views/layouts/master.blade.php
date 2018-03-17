<!doctype html>
<html>
<head>
    <title>@yield('title', 'Project 3')</title>
    <meta charset='utf-8'>


    @stack('head')
</head>
<body>

<header>

</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
    <a href ='https://github.com/mildredfakoya/p3'>View on GitHub</a>
</footer>



@stack('body')

</body>
</html>