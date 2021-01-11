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
                        <label for="file">Foto voor dieren toevoegen?</label>
                        <input type="file" name="image_dieren">
                        <div class="error">{{ $errors->first('image_dieren') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor mensen toevoegen?</label>
                        <input type="file" name="image_mensen">
                        <div class="error">{{ $errors->first('image_mensen') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor landschap toevoegen?</label>
                        <input type="file" name="image_landschap">
                        <div class="error">{{ $errors->first('image_landschap') }}</div>
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

