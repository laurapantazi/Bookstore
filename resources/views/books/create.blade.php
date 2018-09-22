@extends('layouts.app')

@section('content')
	<h1>Insert new book</h1>
	<form action="" method="POST">
		<div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Type book title">
	  </div>
	  <div class="form-group">
	    <label for="author">Author</label>
	    <input type="text" class="form-control" id="author" placeholder="Type book author">
	  </div>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="available">
	    <label class="form-check-label" for="available">Available</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>

@endsection