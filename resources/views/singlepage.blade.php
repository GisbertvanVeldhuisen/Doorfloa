@extends ('layouts/app')

@section ("content")

    <div class="container">

{{--        @dd($posts)--}}

        <div class="row">
            <div class="col-sm">
                <h1>{{ $posts->post_title }}</h1>
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
