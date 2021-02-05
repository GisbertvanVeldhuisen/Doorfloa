@extends ('layouts/app')
@section('meta')
    <meta name="title" content="{{$values->title_intro}}">
    <meta naphp me="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'home'}}">
    <meta property="og:title"
          content="{{$values->title_intro}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/home/image-home_1.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'home'}}">
    <meta property="twitter:title"
          content="{{$values->title_intro}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/home/image-home_1.png')}}">

    <meta name="title" content="{{$values->title_intro}}">
    <meta name="description"
          content="{{$values->intro}}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
          content="{{'home'}}">
    <meta property="og:title"
          content="{{$values->title_intro}}">
    <meta property="og:description"
          content="{{$values->intro}}">
    <meta property="og:image" content="{{asset('storage/home/image-home_1.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
          content="{{'home'}}">
    <meta property="twitter:title"
          content="{{$values->title_intro}}">
    <meta property="twitter:description"
          content="{{$values->intro}}">
    <meta property="twitter:image" content="{{asset('storage/home/image-home_1.png')}}">
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
    <div class="section tiles" style="background-color: {{$values->accent_color}}">
        <div class="shadow left" style="background-color: {{$values->page_color}}"></div>
        <div class="shadow right" style="background-color: {{$values->page_color}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>{{$values->title_intro}}</h2>
                    <p class="intro">
                        {{$values->intro}}
                    </p>
                </div>

            </div>
            <div class="grid-container">
                <div class="one-third">
                    <a href="{{'fotografie'}}" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/home/image_fotografie.png')}}" alt="">
                        <div class="info-container">
                            <p>fotografie</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="{{'recepten'}}" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/home/image_recepten.png')}}" alt="">
                        <div class="info-container">
                            <p>recepten</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="{{'contact'}}" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/home/image_contact.png')}}" alt="">
                        <div class="info-container">
                            <p>contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section text quote full">
        <div class="container">
            <div class="row">
                <div class="col-14">
                    <h2>{{$values->title_text}}</h2>
                    <p>
                        {{$values->text}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section instagram" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="image-container">
                @foreach($posts as $post)
                    <div class="column one-fifth">
                        <a {{--class="full-link"--}} target="_blank" href="{{$post->permalink}}">
                            <img src="{{$post->media_url}}" alt="">
                        </a>
                    </div>

                @endforeach
            </div>
            <span class="instagram-text">Volg mij op instagram</span><a href="" class="instagram">@doorflora</a>
        </div>
    </div>
    <div class="section text quote image" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{asset('storage/home/image-home_1.png')}}" alt="">
                    <div class="shadow" style="background-color: {{$values->page_color}}"></div>
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
                    <a class="menu-item" target="_blank" href="{{url('http://www.instagram.com/doorflora')}}">
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
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen &
                Jurre van Esveld designed by Babette Westeneng.</p>
        </div>
    </div>
@endsection
