@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <form action="">
                <div class="row">
                    <div class="col-sm">
                        <h1>Welke categorie wil je bewerken?</h1>
                    </div>
                </div>
                @include('category-select')
            </form>

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
                               name="category_name">
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>
            </form>

            <div class="row">
                <div class="col-sm">
                    @foreach($categories as $category)

                        <label>{{$category->category_name}}</label>
                        <a class="btn btn-primary" href="verwijder/{{$category->id}}" >Delete</a>

                    @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
