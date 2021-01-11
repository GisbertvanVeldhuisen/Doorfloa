@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <h1>Categorie aanmaken</h1>

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="category_name">Categorie naam</label>
                        <input placeholder="vul hier de titel in" type="text"
                               name="title">
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
