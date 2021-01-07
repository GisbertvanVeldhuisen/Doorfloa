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

            <form method="GET" enctype="multipart/form-data" action="">

                @csrf

                @foreach($posts as $post)
                <div class="row">
                    <div class="col-sm">
                        <label for="title">Post Titel</label>

                        <input value="{{$post->post_title}}" placeholder="hier de titel in" type="text"
                               name="post_title">
                    </div>

                    <div class="col-sm">
                        <label for="post_ingredients">Post ingrediënten</label>
                        <input value="{{$post->post_ingredients}}" placeholder="vul hier de ingrediënten in" type="text"
                               name="post_ingredients">
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm">
                        <label for="post_preparation_title">Post bereiding titel</label>
                        <input value="{{$post->post_preparation_title}}" placeholder="vul hier titel in" type="text"
                               name="post_preparation_title">

                    </div>

                    <div class="col-sm">
                        <label for="post_preparation">Post ingrediënten</label>
                        <input value="{{$post->post_preparation}}" placeholder="vul hier bereidingswijze in" type="text"
                               name="post_preparation">
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
                        {{--                            <a class="btn btn-primary" href="{{ route('singlepage',  $post->post_title) }}">Bekijk</a>--}}
                        {{--                            <button class="btn btn-primary">Bewerk</button>--}}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                        <button class="btn btn-primary" type="submit" >Delete</button>
                        @endforeach
                </div>
            </div>

        </div>
    </div>

@endsection
