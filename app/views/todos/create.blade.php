@extends('layouts.main')
@section('content')
	

	{{ Form::open( array('route' => 'todos.store')) }}
		
		{{ Form::label('title', 'List Title')}}
		{{ Form::text('title')}}
		{{ $errors->first('title', '<small class="error">:message</small>')}}
		{{ Form::submit('submit', array('class' => 'button'))}}
	{{ Form::close()}}
@stop