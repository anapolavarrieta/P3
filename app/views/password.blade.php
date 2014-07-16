@extends('_master')

@section('title')
	Password Generator
@stop

@section('content')
	<h1> Password Generator </h1>
	{{Form::open(array('url' => 'passwordgenerator')) }}	
		{{ Form::label ('words', '# of Words:')}}
		{{ Form::text ('words')}}
		<br/> 
		{{ Form::label ('separation', 'Choose how to separate words')}}
		{{ Form::select ('separation', array(
			'space' => 'Space',
			'-' => '-',
			'/' => '/'
		)
		)}}
		<br/>
		{{ Form::label ('number', 'Add a number')}}
		{{ Form::checkbox ('number')}}
		<br/>
		{{ Form::label ('symbol', 'Add a symbol')}}
		{{ Form::checkbox ('symbol')}}
		<br/>
		{{ Form::label ('upper', 'Upper case first letter of password')}}
		{{ Form::checkbox ('upper')}}
		<br/><br/>
		{{ Form::submit('Generate Password')}}
	{{ Form::close() }}	

	
	<p>{{$password}}</p>

@stop