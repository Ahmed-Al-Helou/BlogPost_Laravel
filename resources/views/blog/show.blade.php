
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>

                <h1 class="display-one">{{ ucfirst($user->posts[0]['tilte']) }}</h1>
                <h3 class="display-one">The Author is : {{$user->name}} </h3>
                <p>{!! $user->posts[0]['body'] !!}</p>
                <hr>
                <a class="btn btn-primary" href='/blog/users/viewpost/{{($user->posts[0]['id'])}}' role="button">Show all posts the {{$user->name}}</a><br><br>
                {{--* <button type="button" class="btn btn-outline-secondary">Show all posts the {{$user->name}}</button><br><br> --}}
                {{--* <a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a> --}}
                <a href="/blog/{{ ($user->posts[0]['id']) }}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection


