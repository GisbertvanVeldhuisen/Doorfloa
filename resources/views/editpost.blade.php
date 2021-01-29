@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <div class="row">
                <div class="col-sm">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>
            </div>





            <div class="row">
                <div class="col-sm">
                    <a href="{{url('/post')}}" class="btn btn-primary">Terug naar post aanmaken</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn-primary" href="{{url($post->id)}}">Bekijk</a>
                </div>
                <div class="col-sm">
                    <a class="btn btn" style="background: #c75146; color: #ffffff;" href="{{url('/delete/' . $post->id)}}" type="DELETE">Verwijder</a>
                </div>
            </div>


            <form method="POST" enctype="multipart/form-data" action="{{route('update-post')}}">

                @csrf
                <label>Selecteer de categorie waarbinnen de post aangemaakt moet worden</label><br>
                <select name="category">
                    @foreach($subcategory as $subcat)
                        <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                    @endforeach
                </select>

                <div class="row">
                    <div class="col-sm">
                        <label for="title_intro">titel boven intro</label>
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <input value="{{$post->title_intro}}" placeholder="vul hier de titel in" type="text"
                               name="title_intro">
                    </div>
                    <div class="col-sm">
                        <label for="intro">titel</label>

                        <input value="{{$post->intro}}" placeholder="vul hier de intro in" type="text"
                               name="intro">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="title">Titel</label>

                        <input value="{{$post->title}}" placeholder="hier de titel in" type="text"
                               name="title">
                    </div>

                    <div class="col-sm">
                        <label for="post_ingredients">Post ingrediënten</label>
                        <textarea placeholder="vul hier de ingrediënten in"
                                  name="ingredients">{{$post->ingredients}}</textarea>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="file">Foto van gerecht (Foto: 720 x 720)</label>
                            <input type="file" name="image_dish">
                            @error('image_dish')
                            <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                            @enderror
                            <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                            <img src="{{asset('/storage/post/'.$post->id.'image_dish.png')}}" alt="">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm">
                        <label for="preparation_title">Post bereiding titel</label>
                        <input value="{{$post->preparation_title}}" placeholder="vul hier titel in" type="text"
                               name="preparation_title">

                    </div>

                    <div class="col-sm">
                        <label for="post_preparation">Bereidingswijze</label>
                        <textarea placeholder="vul hier bereidingswijze in"
                                  name="preparation">{{$post->preparation}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="file">Foto gerecht toevoegen? (Foto: 500 x 500)</label>
                        <input type="file" name="image_dish1">
                        @error('image_dish1')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                        <img src="{{asset('/storage/post/'.$post->id.'image_dish1.png')}}" alt="">
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto van gerecht toevoegen? (Foto: 500 x 500)</label>
                        <input type="file" name="image_dish2">
                        @error('image_dish2')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                        <img src="{{asset('/storage/post/'.$post->id.'image_dish2.png')}}" alt="">
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto van gerecht toevoegen? (Foto: 500 x 500)</label>
                        <input type="file" name="image_dish3">
                        @error('image_dish3')
                        <div class="error">Bestand is groter dan 2 mb of geen .png bestand</div>
                        @enderror
                        <div style="font-weight: 700">Foto's kunnen maximaal 2 mb zijn en .png bestand. Comprimeer jouw bestanden hier: <a style="color: red; font-weight: 700" href="https://tinypng.com/">TinyPNG</a></div>
                        <img src="{{asset('/storage/post/'.$post->id.'image_dish3.png')}}" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="color">Welke kleur moet de pagina hebben?</label>
                        <input value="{{$post->page_color}}" type="color" name="color">
                    </div>
                    <div class="col-4">
                        <label for="color">Welke kleur moeten de accenten hebben?</label>
                        <input value="{{$post->accent_color}}" type="color" name="accent_color">
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
