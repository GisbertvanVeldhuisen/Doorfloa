@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">
            @foreach($values as $value)

                <form method="POST" enctype="multipart/form-data" action="">
                    @csrf
                    <div class="row">
                        <input class="col-sm" value="{{$value->title}}" placeholder="vul hier de titel in" type="text"
                               name="title">
                        <textarea class="col-sm" placeholder="vul hier de intro in"
                                  name="intro">{{$value->intro}}</textarea>
                    </div>
                    <div class="row">
                        <input class="col-sm" value="{{$value->title_text}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="title_text">
                        <div class="col-sm">
                            <label for="checkbox">
                                <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                                Wil je een afbeelding in de naast de tekst?
                            </label>
                            <input type="file" name="image">
                        </div>
                        <textarea class="col-sm" placeholder="vul hier de tekst in"
                                  name="text">{{$value->text}}</textarea>
                    </div>
                    <div class="row">
                        <input class="col-sm" value="{{$value->title_text_1}}"
                               placeholder="vul hier de titel boven de tekst in"
                               type="text" name="title_text_1">
                        <div class="col-sm">
                            <label for="checkbox">
                                <input type="checkbox" class="checkbox" name="checkbox" value=""/>
                                Wil je een afbeelding in de naast de tekst?
                            </label>
                            <input id="selected-toolbar" type="file" name="image_1">

                        </div>
                        <textarea class="col-sm" placeholder="vul hier de tekst in"
                                  name="text_1">{{$value->text_1}}</textarea>
                    </div>
                    <div class="row">
                        <label for="color">Welke kleur moet de pagina hebben?</label>
                        <input class="col-1" value="{{$value->page_color}}" type="color" name="color">
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection

