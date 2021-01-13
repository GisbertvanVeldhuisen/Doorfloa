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
                        <h1>Landschap pagina bewerken</h1>

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
                        <label for="file">Foto toevoegen aan de slider?</label>
                        <input type="file" name="image_slider">
                        <div class="error">{{ $errors->first('image_slider') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto toevoegen aan de slider?</label>
                        <input type="file" name="image_slider1">
                        <div class="error">{{ $errors->first('image_slider1') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto toevoegen aan de slider?</label>
                        <input type="file" name="image_slider2">
                        <div class="error">{{ $errors->first('image_slider2') }}</div>
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
    <div class="section delete images">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    @php($files = glob('storage/landscapesImages/*.{png}', GLOB_BRACE))
                    @foreach($files as $file)
                        <form action="">
                            {{$file}}
                            <input class="btn btn-danger" type="submit" value="verwijder afbeelding">
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

