@extends('layout')

@section('title')
	Product editor
@endsection

@section('content')
	<h1>Product Editor</h1>
	<form method="POST" action="/products/{{ $result->id }}/edit">
		@foreach($result as $item)
			<label for="">
		@endforeach
	</form>
@endsection