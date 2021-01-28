@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">
            <form action="">
                <h1>Welke pagina wil je bewerken?</h1>
                @include('form-select')
            </form>

            <form method="POST" enctype="multipart/form-data" action="">
                @csrf

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
                        <h1>Selecteer de categorie waarbinnen de post aangemaakt moet worden</h1>
                        <select name="category">
                            @foreach($subcategory as $subcat)
                                <option value="{{$subcat->id}}">{{$subcat->name}} @if($subcat->category_id == 1)
                                        Zoet @else() Hartig @endif</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm">
                        <label for="title_intro">titel boven intro</label>

                        <input placeholder="vul hier de titel in" type="text"
                               name="title_intro">
                    </div>
                    <div class="col-sm">
                        <label for="intro">intro</label>

                        <textarea placeholder="vul hier de intro in" name="intro"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label for="title">titel</label>

                        <input placeholder="vul hier de titel in" type="text"
                               name="title">
                    </div>

                    <div class="col-sm">
                        <label for="post_ingredients">ingrediënten</label>
                        <textarea placeholder="vul hier de ingrediënten in" type="text"
                                  name="ingredients"></textarea>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm">
                            <label for="file">Foto van gerecht toevoegen?</label>
                            <input type="file" name="image_dish">
                            <div class="error">{{ $errors->first('image_dish') }}</div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm">
                        <label for="post_preparation_title">titel boven bereiding</label>
                        <input placeholder="vul hier titel in" type="text"
                               name="preparation_title">

                    </div>

                    <div class="col-sm">
                        <label for="post_preparation">Bereiding</label>
                        <textarea placeholder="vul hier bereidingswijze in" type="text"
                                  name="preparation"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="file">Foto gerecht toevoegen?</label>
                        <input type="file" name="image_dish1">
                        <div class="error">{{ $errors->first('image_dish1') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto van gerecht toevoegen?</label>
                        <input type="file" name="image_dish2">
                        <div class="error">{{ $errors->first('image_dish2') }}</div>
                    </div>
                    <div class="col-sm">
                        <label for="file">Foto van gerecht toevoegen?</label>
                        <input type="file" name="image_dish3">
                        <div class="error">{{ $errors->first('image_dish3') }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <label for="color">Welke kleur moet de pagina hebben?</label>
                        <input type="color" name="color">
                    </div>
                    <div class="col-4">
                        <label for="color">Welke kleur moeten de accenten hebben?</label>
                        <input type="color" name="accent_color">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>
            </form>

            <form action="">
                <div class="row">
                    <div class="col-sm">
                        <h1>Post bewerken</h1>
                        <select id="dynamic_select">
                            <script>
                                jQuery(function ($) {
                                    jQuery("#dynamic_select").change(function () {
                                        location.href = jQuery(this).val();
                                    })

                                });
                            </script>
                            <option value="">Selecteer een post om te bewerken</option>

                            @foreach($posts as $post)

                                <option value="{{route('post', $post->id)}}">{{$post->title}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>
            </form>


        </div>
    </div>


@endsection
