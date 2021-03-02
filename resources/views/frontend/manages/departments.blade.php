@extends('frontend.home_layout')

@section('content')

<div class="container">
	<div class="main-content">
		<h1>Departments</h1>
		@foreach($departments as $department)
		<h1>{{$department->department_name}}</h1>
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