@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>

                <h1 class="display-one">Show All post </h1>
                <h3 class="display-one">The Author is : {{$user->name}} </h3>
                <p>{!! $user->posts[0]['body'] !!}</p>

            </div>
        </div>
    </div>
@endsection
