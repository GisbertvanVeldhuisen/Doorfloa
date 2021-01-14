@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <form method="POST" enctype="multipart/form-data" action="{{route('update-category')}}">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <input class="btn btn-primary">
                        <h1>Categorie bewerken</h1>

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
                        <input value="{{$categories->category_name}}" type="text"
                               name="category_name">
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection
