@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <div class="row">
                <div class="col-sm">
                    <h1>Post bewerken</h1>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>
            </div>
            <select id="dynamic_select">
                <script>
                    jQuery(function ($) {
                        jQuery("#dynamic_select").change(function () {
                            location.href = jQuery(this).val();
                        })

                    });
                </script>
                <option value="">Selecteer een recept om te bewerken</option>
                @foreach($posts as $post)
                    <option value="/editpost/{{$post->id}}">{{$post->title}}</option>
                @endforeach
            </select>
            <form method="GET" enctype="multipart/form-data" action="">

                @csrf

                @foreach($posts as $post)
                    <div class="row">
                        <div class="col-sm">
                            <label for="title_intro">titel boven intro</label>

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
                                   name="post_title">
                        </div>

                        <div class="col-sm">
                            <label for="post_ingredients">Post ingrediënten</label>
                            <textarea placeholder="vul hier de ingrediënten in" name="post_ingredients">{{$post->ingredients}}</textarea>
                        </div>
                        <div class="col-sm">
                            <div class="col-sm">
                                <label for="file">Foto van gerecht</label>
                                <input type="file" name="image_dish">
                                <div class="error">{{ $errors->first('image_dish') }}</div>
                                <img src="{{asset('/storage/post/'.$post->id.'image_dish.png')}}" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <label for="post_preparation_title">Post bereiding titel</label>
                            <input value="{{$post->preparation_title}}" placeholder="vul hier titel in" type="text"
                                   name="post_preparation_title">

                        </div>

                        <div class="col-sm">
                            <label for="post_preparation">Bereidingswijze</label>
                            <textarea placeholder="vul hier bereidingswijze in"
                                      name="post_preparation">{{$post->preparation}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label for="file">Foto gerecht toevoegen?</label>
                            <input type="file" name="image_dish1">
                            <div class="error">{{ $errors->first('image_dish1') }}</div>
                            <img src="{{asset('/storage/post/'.$post->id.'image_dish1.png')}}" alt="">
                        </div>
                        <div class="col-sm">
                            <label for="file">Foto van gerecht toevoegen?</label>
                            <input type="file" name="image_dish2">
                            <div class="error">{{ $errors->first('image_dish2') }}</div>
                            <img src="{{asset('/storage/post/'.$post->id.'image_dish2.png')}}" alt="">
                        </div>
                        <div class="col-sm">
                            <label for="file">Foto van gerecht toevoegen?</label>
                            <input type="file" name="image_dish3">
                            <div class="error">{{ $errors->first('image_dish3') }}</div>
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

                @endforeach


            </form>

            <div class="row">
                <div class="col-sm">
                    @foreach($posts as  $post)

                        <label>{{$post->post_title}}</label>
                        <a class="btn btn-primary" href="{{ route('singlepage',  $post->id) }}">Bekijk</a>
                        <a class="btn btn-primary" href="delete/{{$post->id}}">Delete</a>

                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
