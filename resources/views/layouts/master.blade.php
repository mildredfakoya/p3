<!doctype html>
<html>
<head>
    <title>@yield('title', 'BMI Calculator')</title>
    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='/css/p3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>

<body>
<header>
    @include('modules.nav')
</header>

<section id='main'>
    @yield('content')
</section>


<footer>
    <a href='http://github.com/mildredfakoya/p3'><i class='fa fa-github'></i> View on Github</a>
</footer>


@stack('body')

</body>
</html>