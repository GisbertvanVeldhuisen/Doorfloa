<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->

    <title>Doorflora</title>

{{--@yield('meta')--}}

<!-- Site includes -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body id="root">
<div id="wrap_all">
    {{-- @include('includes/header')--}}
    {{--   @yield('title')--}}
    @yield('content')

</div>
</body>
<div class="footer">
    <div class="container">
        <div class="main-menu-container">
            <a class="menu-item" href="">menu items</a>

        </div>
        <div class="logo-container">
            {{--<img src="{{ asset('/storage/logo.png') }}">--}}
        </div>
    </div>
</div>
<div class="socket">
    <div class="container">
        <p>title</p>
    </div>
</div>
</html>
