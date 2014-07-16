@extends('_master')

@section('title')
	Lorem Ipsum Generetor
@stop

@section('content')
	<h1> Lorem Ipsum Generator </h1>
	{{Form::open(array('url' => 'loremipsum')) }}	
		{{ Form::label ('paragraphs', '# of Paragraphs:')}}
		{{ Form::text ('paragraphs')}}
		<br/>
		{{ Form::submit('Generate')}}
	{{ Form::close() }}	


	<?php $generator= new Badcow\LoremIpsum\Generator(); ?>
	<?php $paragraphs =$generator->getParagraphs($data= Input::get('paragraphs')); ?>
	{{ implode('<p>', $paragraphs) }}

@stop