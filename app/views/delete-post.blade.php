@extends('home')
@section('main')
    @if(Session::has('message'))
        <h4>{{Session::get('message')}}</h4>
    @else
        <h4>Do you want to delete this post?</h4>
    @endif
    <p>Please re-type 'Post title' to confirm</p>
    <p style="color: red; font-weight: bold">{{$post->title}}</p>
    {{Form::open()}}
    {{Form::model($post, array('method'=>$method))}}
    {{Form::label('Post title')}}{{Form::text('title')}}
    {{Form::submit('Delete')}}
    {{Form::close()}}
    <button><a href="{{URL::to('/')}}">Return Home</a></button>
@stop