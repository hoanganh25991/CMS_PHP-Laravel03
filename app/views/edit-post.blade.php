@extends('home')
@section('main')
    {{Form::open()}}
    {{Form::model($post, array('method'=>$method))}}
    {{Form::label('Title')}}{{Form::text('title')}}
    {{Form::label('Content')}}{{Form::text('content')}}
    {{Form::label('Category_ID')}}{{Form::text('category_id')}}
    {{Form::submit('Update')}}
    {{Form::close()}}
@stop