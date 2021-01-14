@extends ('layouts/app')

@section ("content")
    <div class="section header" style="background-image: url({{asset('storage/general/header_img.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>Door<strong style="color: {{$values->page_color}}">flora</strong></h1>
                </div>
            </div>
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
                    <a href="#" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/home/image_fotografie.png')}}" alt="">
                        <div class="info-container">
                            <p>fotografie</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="#" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/home/image_recepten.png')}}" alt="">
                        <div class="info-container">
                            <p>recepten</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="/contact" class="full-link"></a>
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
    <div class="section text image" style="background-color: {{$values->accent_color}}">
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
                    <a class="button" href="/contact">
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
                    <a class="menu-item" href="#">Fotografie</a>
                    <a class="menu-item" href="#">Recepten</a>
                    <a class="menu-item" href="#">Over mij</a>
                    <a class="menu-item" href="#">Contact</a>

                </div>
            </div>
            <div class="column two-fifth contact" style="background-color: {{$values->page_color}}">
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
    <div class="socket" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen &
                Jurre
                van Esveld</p>
        </div>
    </div>
@endsection
