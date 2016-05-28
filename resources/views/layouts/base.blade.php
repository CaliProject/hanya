<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- TODO: 动态Title --}}
    <title>@yield('title') | 汉雅</title>

    <!-- Styles -->
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ url('logo.png') }}">
    <link rel="shortcut icon" href="{{ url('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ url('logo.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('logo.png') }}">

    @stack('head')

</head>
<body id="app">

    @include('layouts.partials.app-navbar')

    <main class="Main">
        @yield('base.content')
    </main>

    @include('layouts.partials.app-footer')

    <!-- JavaScripts -->
    <script src="{{ url('assets/js/app.js') }}"></script>

    @stack('scripts.footer')

</body>
</html>