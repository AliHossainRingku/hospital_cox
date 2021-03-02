@extends('frontend.home_layout')

@section('content')

<div class="container">
	<div class="main-content">
		<h1>News</h1>
		@foreach($news as $data)
		<h1>{{$data->news_title}}</h1>
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