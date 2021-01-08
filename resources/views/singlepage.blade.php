@extends ('layouts/app')

@section ("content")


    <div class="container">

        <div class="row">
            <div class="col-sm">
                <h2>{{ $posts->post_title }}</h2>
            </div>
        </div>

        <div class="section text" style="">
            <div class="container">
                <div class="column one-half">
                    <p>{{ $posts->post_ingredients }}</p>
                </div>


            </div>
        </div>

        <div class="section text" style="">
            <div class="container">

                <div class="column one-half">
                    <p>{{ $posts->post_preparation_title }}</p>
                </div>
            </div>

        </div>

        <div class="section text" style="">
            <div class="container">

                <div class="column one-half">
                    <p>{{ $posts->post_preparation }}</p>
                </div>
            </div>

        </div>
    </div>


@endsection
