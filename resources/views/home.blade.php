@extends ('layouts/app')

@section ("content")
    <div class="section header" style="background-image: url({{asset('storage/image-tekst_1.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-sm"><h1>{{$values->title}}<strong style="color: {{$values->page_color}}"></strong></h1></div>
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
                    <div class="image-container">
                        <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
                        <div class="info-container">
                            <p>fotografie</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="image-container">
                        <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
                        <div class="info-container">
                            <p>recepten</p>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <a href="/contact" class="full-link"></a>
                    <div class="image-container">
                        <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
                        <div class="info-container">
                            <p>contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section text full">
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
                    <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
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
@endsection
