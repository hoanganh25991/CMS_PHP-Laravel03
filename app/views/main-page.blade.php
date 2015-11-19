@extends('home')
@section('main')

    <ul>
        @foreach($posts as $post)
            <li><a href="/{{$post->id}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@stop