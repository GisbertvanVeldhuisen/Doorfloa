@extends ('layouts/app')

@section ("content")
    <div class="section form">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <input type="color" name="color">
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

