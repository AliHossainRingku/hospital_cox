@extends('frontend.home_layout')

@section('content')
    <h1>News</h1>

    <hr>
        {{ Session::get('msg') }}

    <hr>



@endsection