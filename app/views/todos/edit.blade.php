@extends('layouts.main')
@section('content')
	

	{{ Form::model($list, array('route' => ['todos.update', $list->id], 'method' => 'PUT')) }}
		
		{{ Form::label('name', 'List Title')}}
		{{ Form::text('name')}}
		{{ $errors->first('name', '<small class="error">:message</small>')}}
		{{ Form::submit('update', array('class' => 'button'))}}
	{{ Form::close()}}
@stop