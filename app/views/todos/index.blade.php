@extends('layouts.main')
@section('content')
	<h2>All Todo Lists</h2>

	<ul>
		@foreach ($todo_lists as $list)
		<li>{{$list->name}}</li>
		@endforeach
	</ul>
@stop