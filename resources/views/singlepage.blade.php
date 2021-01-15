@extends ('layouts/app')

@section ("content")

    <div class="section header" style="background-image: url({{asset('storage/general/header_img.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>Door<strong style="color: {{$posts->page_color}}">flora</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section text full intro" style="background-color: {{$posts->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-14">
                    <h2>{{$posts->title_intro}}</h2>
                    <p>
                        {{$posts->intro}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="single-recipe" style="background-color: {{$posts->accent_color}}">
        <div class="shadow" style="background-color: {{$posts->page_color}}"></div>
        <div class="section ingredients">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="heading">
                            <h1>{{$posts->title}}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <img src="{{asset('/storage/post/'.$posts->id.'image_dish.png') }}" alt="">
                    </div>
                    <div class="col-5">
                        <p class="title">ingrediënten</p>
                        <p>{{$posts->ingredients}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section text full single-recipe">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h2>{{$posts->preparation_title}}</h2>
                    </div>
                    <div class="col-sm">
                        <p>{{$posts->preparation}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section recipe-images" style="background-color: {{$posts->page_color}}">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{asset('/storage/post/'.$posts->id.'image_dish1.png')}}" alt="">
                </div>
                <div class="col-4">
                    <img src="{{asset('/storage/post/'.$posts->id.'image_dish2.png')}}" alt="">
                </div>
                <div class="col-4">
                    <img src="{{asset('/storage/post/'.$posts->id.'image_dish3.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="column three-fifth menu" style="background-color: {{$posts->accent_color}}">
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
            <div class="column two-fifth contact" style="background-color: {{$posts->page_color}}">
                <div class="heading">
                    <h3>contact</h3>
                </div>
                <div class="main-menu-container">
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon location"></span>
                        <span class="item">Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon search"></span>
                        <span class="item">Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon instagram"></span>
                        <span class="item">Doorflora.nl</span>
                    </a>
                    <a class="menu-item" href="www.doorflora.nl">
                        <span class="icon pintrest"></span>
                        <span class="item">Doorflora.nl</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="socket" style="background-color: {{$posts->accent_color}}">
        <div class="container">
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen &
                Jurre
                van Esveld</p>
        </div>
    </div>
@endsection
