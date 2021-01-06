@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <h1>Home pagina bewerken</h1>

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
                        <input value="{{$value->title_intro}}" placeholder="vul hier de titel in" type="text"
                               name="title_intro">
                    </div>
                    <div class="col-sm">
                        <label for="intro">Intro</label>
                        <textarea placeholder="vul hier de intro in"
                                  name="intro">{{$value->intro}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_text">Titel boven tekst</label>
                        <input value="{{$value->title_text}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="title_text">
                    </div>
                    <div class="col-sm">
                        <label for="checkbox">Wil je een foto toevoegen?</label>
                        <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                        <input class="file-hidden" type="file" name="image">
                        <div class="error">{{ $errors->first('image') }}</div>

                    </div>
                    <div class="col-sm">
                        <label for="text">Tekst onder de titel</label>
                        <textarea placeholder="vul hier de tekst in"
                                  name="text">{{$value->text}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title_text_1">Titel boven tekst</label>
                        <input value="{{$value->title_text_1}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="title_text_1">
                    </div>
                    <div class="col-sm">
                        <label for="checkbox">Wil je een foto toevoegen?</label>
                        <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                        <input class="file-hidden" type="file" name="image_1">
                        <div class="error">{{ $errors->first('image_1') }}</div>

                    </div>
                    <div class="col-sm">
                        <label for="text_1">Tekst onder de titel</label>
                        <textarea placeholder="vul hier de tekst in"
                                  name="text_1">{{$value->text_1}}</textarea>
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
                        <label for="file">Foto voor fotografie toevoegen?</label>
                        <input type="file" name="image_fotografie">
                        <div class="error">{{ $errors->first('image_fotografie') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor recepten toevoegen?</label>
                        <input type="file" name="image_recepten">
                        <div class="error">{{ $errors->first('image_recepten') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto voor contact toevoegen?</label>
                        <input type="file" name="image_contact">
                        <div class="error">{{ $errors->first('image_contact') }}</div>
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

