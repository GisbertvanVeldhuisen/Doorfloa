@extends ('layouts/app')
@section('meta')
    <meta name="title" content="{{$values->title}}">
    <meta name="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'recepten'}}">
    <meta property="og:title"
          content="{{$values->title}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/recipe/image_recipe_right.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'recepten'}}">
    <meta property="twitter:title"
          content="{{$values->title}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/recipe/image_recipe_right.png')}}">

    <meta name="title" content="{{$values->title_intro}}">
    <meta name="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'recepten'}}">
    <meta property="og:title"
          content="{{$values->title}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/recipe/image_recipe_right.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'recepten'}}">
    <meta property="twitter:title"
          content="{{$values->title}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/recipe/image_recipe_right.png')}}">
@endsection

@section ("content")
    <div class="section header" style="background-image: url({{asset('storage/general/header_img.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>door<strong style="color: {{$values->page_color}}">flora</strong></h1>
                </div>
            </div>
        </div>
        <div class="arrow down bounce">
            <a class="arrow-down fa-2x" href="javascript:"></a>
        </div>
    </div>

    <div class="section tiles recipe" style="background-color: {{$values->accent_color}}">
        <div class="shadow left" style="background-color: {{$values->page_color}}"></div>
        <div class="shadow right" style="background-color: {{$values->page_color}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>{{$values->title}}</h2>
                    <p class="intro">
                        {{$values->intro}}
                    </p>
                </div>

            </div>
            <div class="grid-container">
                <div class="one-third">
                    <a href="{{'zoet'}}" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/recipe/image_zoet.png')}}" alt="">
                        <div class="info-container">
                            <p>zoet</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="{{'hartig'}}" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/recipe/image_hartig.png')}}" alt="">
                        <div class="info-container">
                            <p>hartig</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section quote">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <blockquote>{{$values->quote}}</blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="section text image recipe" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h2>{{$values->title_text}}</h2>
                    <p>
                        {{$values->text}}
                    </p>
                </div>
                <div class="col-5">
                    <img src="{{asset('storage/recipe/image_recipe_right.png')}}" alt="">
                    <div class="shadow" style="background-color: {{$values->page_color}}"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section text image quote" style="background-color: {{$values->page_color}}">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{asset('storage/recipe/image_recipe_left.png')}}" alt="">
                    <div class="shadow" style="background-color: {{$values->accent_color}}"></div>
                </div>

                <div class="col-7">
                    <h2>{{$values->title_text_1}}</h2>
                    <p>
                        {{$values->text_1}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section contact" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p><strong>{{$values->contact}}</strong></p>
                    <p>{{$values->contact_text}}</p>
                    <a class="button" href="{{'contact'}}">
                        {{$values->contact_button}} <span class="icon mail"></span>
                    </a>
                </div>
                <div class="col-5">
                    <div class="image-container" style="background-color: {{$values->page_color}}">
                        <img src="{{asset('storage/general/contact_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="column three-fifth menu" style="background-color: {{$values->accent_color}}">
                <div class="heading">
                    <h3>menu</h3>
                </div>
                <div class="main-menu-container">
                    <a class="menu-item" href="{{'fotografie'}}">Fotografie</a>
                    <a class="menu-item" href="{{'recepten'}}">Recepten</a>
                    <a class="menu-item" href="{{'over'}}">Over</a>
                    <a class="menu-item" href="{{'contact'}}">Contact</a>
                </div>
            </div>
            <div class="column two-fifth contact" style="background-color: {{$values->page_color}}">
                <div class="heading">
                    <h3>contact</h3>
                </div>
                <div class="main-menu-container">
                     <span class="menu-item">
                        <span class="icon about"></span>
                        <span class="item">Doorflora</span>
                    </span>
                    <span class="menu-item">
                        <span class="icon location"></span>
                        <span class="item">Lelystad</span>
                    </span>
                    <a class="menu-item" target="_blank" href="{{url('http://www.facebook.com/doorflora')}}">
                        <span class="icon facebook"></span>
                        <span class="item">Doorflora</span>
                    </a>
                    <a class="menu-item" target="_blank"  href="{{url('http://www.instagram.com/doorflora')}}">
                        <span class="icon instagram"></span>
                        <span class="item">Doorflora</span>
                    </a>
                    <a class="menu-item" target="_blank" href="{{url('http://www.pinterest.com/doorflora')}}">
                        <span class="icon pintrest"></span>
                        <span class="item">Doorflora</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="socket" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen & Jurre van Esveld designed by Babette Westeneng.</p>
        </div>
    </div>
@endsection
