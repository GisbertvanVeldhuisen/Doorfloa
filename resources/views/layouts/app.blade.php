<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Doorflora</title>

{{--@yield('meta')--}}

<!-- Site includes -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body id="root">
<div id="wrap_all">
    @include('components/header')
    <div class="main">
        {{--   @yield('title')--}}
        @yield('content')
    </div>
</div>
</body>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm menu">
                <h3>menu</h3>
                <div class="main-menu-container">
                    <a class="menu-item" href="#">Fotografie</a>
                    <a class="menu-item" href="#">Recepten</a>
                    <a class="menu-item" href="#">Over mij</a>
                    <a class="menu-item" href="#">Contact</a>

                </div>
            </div>
            <div class="col-sm contact">
                <h3>contact</h3>
                <div class="main-menu-container">

                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon location"></span>
                        <span>Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon search"></span>
                        <span>Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon instagram"></span>
                        <span>Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon pintrest"></span>
                        <span>Doorflora.nl</span>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="socket">
    <div class="container">
        <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen & Jurre
            van Esveld</p>
    </div>
</div>
</html>
