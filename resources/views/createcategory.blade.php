@extends ('layouts/app')

@section ("content")


    <form method="POST" enctype="multipart/form-data" action="">
        @csrf

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

@endsection
