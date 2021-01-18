@extends ('layouts/app')

@section ("content")

    <div class="section form">

        <div class="container">


            <form method="POST" enctype="multipart/form-data" action="">
                @csrf

                <div class="row">
                <div class="row">
                    <div class="col-sm">
                        <h1>Post aanmaken</h1>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm">
                        <label for="title">Post Titel</label>

                        <input placeholder="vul hier de titel in" type="text"
                               name="post_title">
                    </div>

                    <div class="col-sm">
                        <label for="post_ingredients">Post ingrediënten</label>
                        <textarea placeholder="vul hier de ingrediënten in" type="text"
                                  name="post_ingredients"></textarea>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm">
                            <label for="post_preparation_title">Post bereiding titel</label>
                            <input placeholder="vul hier titel in" type="text"
                                   name="post_preparation_title">

                        </div>

                        <div class="col-sm">
                            <label for="post_preparation">Post ingrediënten</label>
                            <textarea placeholder="vul hier bereidingswijze in" type="text"
                                      name="post_preparation"></textarea>
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

        </div>
    </div>

@endsection
