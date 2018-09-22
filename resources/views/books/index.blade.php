@extends('layouts.app')

@section('content')
	<h1>Books</h1>
	@if(count($books)>0)
		<ul>
		@foreach($books as $i)
			<li><a href="/books/{{$i->id}}"> {{$i->title}} </a></li>
		@endforeach
		</ul>

		{{$books ->links()}}
	@else
		<p>No book found</p>
	@endif
@endsection