@extends('layouts.main')
@section('content')
	<h1>Hi!</h1>
	@foreach ($data as $item)
	<li>{{$item}}</li>
	@endforeach
@stop