@extends('_master')

@section('content')
	<h1> Developer's Best Friend </h1>
	<h2> Lorem Ipsum Generator </h2>
		<p> <a href= "http://en.wikipedia.org/wiki/Lorem_ipsum">Lorem Ipsum </a> is a filter text commonly used to demonstrate the graphic 
			elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may 
			allow viewers to focus on graphic aspects sucha as font, typography and page layout </p>
		<p> <a href="/loremipsum"> Genereate some paragraphs </a> </p>
	<h2> Random User Generator </h2>
		<p> Creates a random user data </p>
		<p> <a href="/usergenerator">Generate some users </a></p>
	<h2> Password Generator </h2>
		<p> xkcd Password generator is a tool that creates a more secure and easier to remembrer password, using a combination of random words. 
			It also has the option to personalize it! </p>
		<p> <a href="/passwordgenerator">Generate a random password </a></p> 
@stop

@section ('home')
@stop

