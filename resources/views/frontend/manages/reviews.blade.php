@extends('frontend.home_layout')

@section('content')

<div class="container">
	<div class="main-content">
		<h1>Banners</h1>
		@foreach($reviews as $data)
		<h1>{{$data->review_title}}</h1>
		<h3>{{data->user_name</h3>
		<p>{{$data->review_description}}</p>
		@endforeach
	</div>
</div>

<style type="text/css">
	.container{
		background-color: red;
	}
	.main-content{
		margin-top: 130px;
		
	}
</style>
    



@endsection