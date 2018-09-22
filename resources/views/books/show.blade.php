@extends('layouts.app')

@section('content')
	<h1>{{$book->title}}</h1>
	<h3>{{$book->author}}</h3>
	@if (($book->available) == 1) <p>Available</p>
	@else <p>Unavailable</p>
	@endif
	<p><small>Added on {{$book->created_at}}</small></p>


	<a href="/books">Go Back</a>

	<a href="/books/{{$book->id}}/edit/" class="btn btn-default">Edit</a>

@endsection
