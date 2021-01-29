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
                        <h1>Recepten pagina bewerken</h1>

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
                        <label for="intro">Quote</label>
                        <textarea placeholder="vul hier de intro in"
                                  name="quote">{{$value->quote}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_text">Titel boven tekst</label>
                        <input value="{{$value->title_text}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="titel_text">
                    </div>
                    <div class="col-sm">
                        <label for="text">Tekst onder de titel</label>
                        <textarea placeholder="vul hier de tekst in"
                                  name="text">{{$value->text}}</textarea>
                    </div>
                    <div class="col-sm">
                        <label for="checkbox">Wil je een foto toevoegen? (Foto: 350 x 350)</label>
                        <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                        <input class="file-hidden" type="file" name="image_right">
                        @error('image_1')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="titel_text_1">Titel boven tekst</label>
                        <input value="{{$value->title_text_1}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="titel_text_1">
                    </div>
                    <div class="col-sm">
                        <label for="text_1">Tekst onder de titel</label>
                        <textarea placeholder="vul hier de tekst in"
                                  name="text_1">{{$value->text_1}}</textarea>
                    </div>
                    <div class="col-sm">
                        <label for="checkbox">Wil je een foto toevoegen? (Foto: 350 x 350)</label>
                        <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                        <input class="file-hidden" type="file" name="image_left">
                        @error('image_1')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
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
                    <div class="col-4">
                        <label for="file">Foto voor zoet toevoegen? (Foto: 440 x 440)</label>
                        <input type="file" name="image_zoet">
                        @error('image_fotografie')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                    </div>
                    <div class="col-4">
                        <label for="file">Foto voor hartig toevoegen? (Foto: 440 x 440)</label>
                        <input type="file" name="image_hartig">
                        @error('image_recepten')
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

