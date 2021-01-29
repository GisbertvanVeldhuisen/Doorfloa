<header id="header" class="menu">
    <div class="container">
        <div class="logo">
            <a class="menu-item icon home" href="{{ url('/') }}">
            </a>
        </div>
        <script>
            jQuery(function () {
                $('.mobile-menu-toggle').click(function () {
                    $('body').toggleClass('nav-open');
                });
            });
        </script>
        <div class="mobile-menu-toggle">
            <div class="bars"></div>
        </div>
        <div class="mobile-menu">
            <a class="menu-item" href="">
                <span class="icon search"></span>
            </a>
            <a class="menu-item" href="">
                <span class="icon instagram"></span>
            </a>
            <a class="menu-item" href="">
                <span class="icon pintrest"></span>
            </a>
            <a class="menu-item" href="">
                <span class="icon facebook"></span>
            </a>
            <a class="menu-item" href="">
                <span class="icon mail"></span>
            </a>
        </div>
        <div class="menu">
            <a class="menu-item icon search" href="{{ url('#') }}"></a>
            <a class="menu-item icon instagram" href="{{ url('#') }}"></a>
            <a class="menu-item icon pintrest" href="{{ url('#') }}"></a>
            <a class="menu-item icon facebook" href="{{ url('#') }}"></a>
            <a class="menu-item icon mail" href="{{ url('#') }}"></a>
        </div>
    </div>
</header>
