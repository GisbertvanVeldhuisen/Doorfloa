@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <h1>Selecteer hier de hoofdcategorie waarbinnen de subcategorie aangemaakt moet worden</h1>

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <select name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="category_name">Categorie naam</label>
                        <input placeholder="vul hier de titel in" type="text"
                               name="name">
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
                        <h1>Welke categorie wil je bewerken?</h1>
                        @include('category-select')
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
