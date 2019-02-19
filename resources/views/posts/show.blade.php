@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <a href="/posts" class="btn btn-primary"> Go back </a>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a style="display:inline-block;" href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            <a style="display:inline-block;">
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </a>
        @endif
    @endif
 @endsection