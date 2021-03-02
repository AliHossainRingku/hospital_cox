@extends('frontend.home_layout')

@section('content')
<div class="container">
	<div class="main-content">
		<h1>Doctors</h1>
		@foreach($doctors as $data)
		<h1>{{$data->doctor_name}}</h1>
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