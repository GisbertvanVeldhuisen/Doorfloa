@extends ('layouts/app')

@section ("content")

    <div class="section form">
        <div class="container">

            <form method="POST" enctype="multipart/form-data" action="{{route('update-category')}}">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <a href="{{url('/category')}}" class="btn btn-primary">Terug naar categorie aanmaken</a>
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
                        <label for="name">Categorie naam</label>
                        <input type="hidden" name="id" value="{{$values->id}}">
                        <input value="{{$values->name}}" type="text" name="name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>

{{--                <div class="row">--}}
{{--                    <div class="col-sm">--}}

{{--                        <label>{{$values->name}}</label>--}}

{{--                        <a class="btn btn" style="background: #c75146; color: white" href="{{url('/verwijder/' . $values->id)}}" type="DELETE">Delete</a>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </form>


        </div>
    </div>

@endsection
