@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-sm">
                        <h1>Welke pagina wil je bewerken?</h1>
                    </div>
                </div>
                @include('form-select')
            </form>
            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <h1>Fotografie pagina bewerken</h1>

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_intro">Titel boven intro</label>
                        <input value="{{$value->title}}" placeholder="vul hier de titel in" type="text"
                               name="title">
                    </div>
                    <div class="col-sm">
                        <label for="intro">Intro</label>
                        <textarea placeholder="vul hier de intro in"
                                  name="intro">{{$value->intro}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_text">Quote</label>
                        <textarea placeholder="vul hier de Quote in"
                                  name="quote">{{$value->quote}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_intro">Tekst in contact</label>
                        <input value="{{$value->contact}}" placeholder="vul hier de tekst in" type="text" name="contact">
                    </div>
                    <div class="col-sm">
                        <label for="title_intro">Tekst in contact</label>
                        <input value="{{$value->contact_text}}" placeholder="vul hier de titel in" type="text" name="contact_text">
                    </div>
                    <div class="col-sm">
                        <label for="title_intro">Tekst in de knop</label>
                        <input value="{{$value->contact_button}}" placeholder="vul hier de titel in" type="text" name="button">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="file">Foto voor dieren toevoegen? (Foto: 440 x 440)</label>
                        <input type="file" name="image_dieren">
                        @error('image_dieren')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor mensen toevoegen? (Foto: 440 x 440)</label>
                        <input type="file" name="image_mensen">
                        @error('image_mensen')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor landschap toevoegen? (Foto: 440 x 440)</label>
                        <input type="file" name="image_landschap">
                        @error('image_landschap')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="color">Welke kleur moet de pagina hebben?</label>
                        <input value="{{$value->page_color}}" type="color" name="color">
                    </div>
                    <div class="col-4">
                        <label for="color">Welke kleur moeten de accenten hebben?</label>
                        <input value="{{$value->accent_color}}" type="color" name="accent_color">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

