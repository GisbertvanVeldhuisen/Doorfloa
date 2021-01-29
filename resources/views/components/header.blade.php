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
        <div class="menu">
            <a class="menu-item" href="{{'fotografie'}}">
                <span class="icon photography"></span>
            </a>
            <a class="menu-item" href="{{'recepten'}}">
                <span class="icon recipe"></span>
            </a>
            <a class="menu-item" href="{{'over'}}">
                <span class="icon about"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon mail"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon instagram"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon pintrest"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon facebook"></span>
            </a>

        </div>
        <div class="mobile-menu-toggle">
            <div class="bars"></div>
        </div>
        <div class="mobile-menu">
            <a class="menu-item" href="{{'fotografie'}}">
                <span class="icon photography"></span>
            </a>
            <a class="menu-item" href="{{'recepten'}}">
                <span class="icon recipe"></span>
            </a>
            <a class="menu-item" href="{{'over'}}">
                <span class="icon about"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon mail"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon instagram"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon pintrest"></span>
            </a>
            <a class="menu-item" href="{{'contact'}}">
                <span class="icon facebook"></span>
            </a>
        </div>
    </div>
</header>
