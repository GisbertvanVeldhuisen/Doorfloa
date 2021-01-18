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
                    <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <label for="category_name">Categorie naam</label>
                        <input placeholder="vul hier de titel in" type="text"
                               name="name">
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>
            </form>

            <div class="row">
                <div class="col-sm">
                    <select>
                    @foreach($subcategories as $subcategory)
                        <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                    @endforeach
                    </select>

{{--                    <a class="btn btn-primary" href="verwijder/{{$subcategory->id}}" type="DELETE">Delete</a>--}}

                </div>
            </div>

        </div>
    </div>

@endsection
