@extends ('layouts/app')

@section ("content")
    <div class="section header" style="background-image: url({{asset('storage/image-tekst_1.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>Door<strong style="color: {{$values->page_color}}">flora</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section text full intro" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-14">
                    <h2>{{$values->title}}</h2>
                    <p>
                        {{$values->intro}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section text image" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img src="{{asset('storage/image-about.png')}}" alt="">
                    <div class="shadow" style="background-color: {{$values->page_color}}"></div>
                </div>

                <div class="col-7">
                    <h2>{{$values->title_text}}</h2>
                    <p>
                        {{$values->text}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section contact" style="background-color: {{$values->accent_color}}">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <p><strong>vragen of meer informatie voor het aanvragen van een photoshoot?</strong></p>
                    <p>Neem contact met mij op:</p>
                    <a class="button" href="/contact">
                        Klik hier
                        <span class="icon mail"></span>
                    </a>
                </div>
                <div class="col-5">
                    <div class="image-container" style="background-color: {{$values->page_color}}">
                        <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
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
    <div class="socket"  style="background-color: {{$values->accent_color}}">
        <div class="container">
            <p>Copyright © 2020 Doorflora Netherlands, All rights reserved. Website built by Gisbert van Veldhuisen & Jurre van Esveld</p>
        </div>
    </div>
@endsection
