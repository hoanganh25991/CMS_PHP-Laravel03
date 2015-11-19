@extends('home')
@section('main')
    <div>
        <h4>{{$post->title}}</h4>
        <p style="font-size: 0.75em">
        Category: <strong>{{$post->getCategory->name}}</strong>
        Author: <strong>{{$post->getOwner->username}}</strong>
        </p>
        <p>{{$post->content}}</p>
    </div>
    <div>
        <button><a href="{{URL::to('/'.$post->id.'/edit-post')}}">Edit</a></button>
        <button><a href="{{URL::to('/'.$post->id.'/delete-post')}}">Delete</a></button>
    </div>
@stop