@extends('_master')

@section('title')
	User Generetor
@stop

@section('content')
	<h1> User Generator </h1>
	<div class="form">
	{{Form::open(array('url' => 'usergenerator')) }}	
		{{ Form::label ('users', 'Number of users:')}}
		{{ Form::text ('users')}}
		<br/><br/>
		<p> If you want to include one of the followings, check the box:</p>
		{{ Form::label('birthdate', 'Birthdate')}}
		{{ Form::checkbox('birthdate')}}
		<br/>
		{{ Form::label('address', 'Address')}}
		{{ Form::checkbox('address')}}
		<br/>
		{{ Form::label('profile', 'Profile')}}
		{{ Form::checkbox('profile')}}
		<br/>
		{{ Form::submit('Create Users', array('class'=> 'buttom'))}}
	{{ Form::close() }}
	</div>

	<br/>
	<?php $faker= Faker\Factory::create();?>
	<?php $users= Input::get('users');?>
	<?php $birthdate= Input::get('birthdate');?>
	<?php $address= Input::get('address');?>
	<?php $profile= Input::get('profile');?>

	@if ($users>0 && $users<1000)
		@for ($i=0; $i< $users; $i++)
			<div class="users"> {{ $faker->name}} </div>	
			@if(isset($birthdate))
				{{ $faker->date($format = 'm-d-Y', $max = 'now')}}
				<br/>	
			@endif
			@if(isset($address))
				{{ $faker->address}}
				<br/>
			@endif
			@if (isset($profile))
				{{ $faker->text}}
				<br/>
			@endif
			<br/>
		@endfor
	@elseif (isset($users))
		<p>"You did not enter a valid number. It has to be a number between 1 and 1000"</p>
	@else
		<p>"Enter a number between 1 and 1000" </p>
	@endif
@stop