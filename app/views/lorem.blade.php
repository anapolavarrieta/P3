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
		{{ Form::submit('Generate Paragraphs')}}
	{{ Form::close() }}	

	<?php $paragraphs = Input::get('paragraphs'); ?>

	@if ($paragraphs>0 && $paragraphs <= 1000)
		<?php $generator= new Badcow\LoremIpsum\Generator(); ?>
		<?php $paragraphs =$generator->getParagraphs($paragraphs); ?>
		{{ implode('<p>', $paragraphs) }}
	@elseif (isset($paragraphs))
		<p> "You did not enter a valid number. It has to be a number between 1 and 1000" </p>
	@else
		<p> "Enter a number between 1 and 1000" </p>
	@endif

@stop