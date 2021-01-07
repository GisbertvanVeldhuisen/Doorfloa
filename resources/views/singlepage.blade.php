@extends ('layouts/app')

@section ("content")



    <div class="container">
        <h1>{{ $post ->post_title }}</h1>

    </div>

    <div class="section tekstblock" style="">
        <div class="container">
            <div class="column one-half">
                <p>{{ $post->post_ingredients }}</p>
            </div>


        </div>
    </div>

    <div class="section tekstblock" style="">
        <div class="container">

            <div class="column one-half">
                <p>{{ $post->post_preparation_title }}</p>
            </div>
        </div>

    </div>

    <div class="section tekstblock" style="">
        <div class="container">

            <div class="column one-half">
                <p>{{ $post->post_preparation }}</p>
            </div>
        </div>

    </div>

    @endforeach


@endsection
