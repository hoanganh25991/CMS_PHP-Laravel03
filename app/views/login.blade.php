@extends('home')
@section('main')
    <h4>Please login first!</h4>
    {{Form::open()}}
    {{Form::label('Username')}}{{Form::text('username')}}
    {{Form::label('Password')}}{{Form::text('password')}}
    {{Form::submit('Login')}}
    {{Form::close()}}
@stop