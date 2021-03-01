@extends('home_layout')

@section('admin_content')
    <h1>News</h1>

    <hr>
        {{ Session::get('msg') }}

    <hr>



@endsection