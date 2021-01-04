@extends ('layouts/app')

@section ("content")
    <h1>home</h1>

    <div class="section tiles">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1>{{$values->title}}</h1>
                    <p>
                        {{$values->intro}}
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-sm">
                    <p>fotografie</p>
                </div>
                <div class="col-sm">
                    <p>recepten</p>
                </div>
                <div class="col-sm">
                    <p>contact</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section text full">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>{{$values->title_text}}</h2>
                    <p>
                        {{$values->text}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section text image">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>{{$values->title_text_1}}</h2>
                    <p>
                        {{$values->text_1}}
                    </p>
                </div>
                <div class="col-sm">
                    <img src="{{asset('storage/image-tekst_1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
