@extends('home')
@section('main')
    {{--@if(Session::has('user_id'))--}}
        {{--{{Session::get('user_id')}}--}}
    {{--@endif--}}
    <form method="post">
        <input type="text" name="title" placeholder="Post title">
        <input type="text" name="content" placeholder="Post content">
        <input type="text" name="category_id" placeholder="Post category">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <button>Create</button>
    </form>
@stop