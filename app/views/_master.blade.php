<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield ('title', 'Developer´s Best Friend')</title>
	<meta charset="utf-8">
	<link href="css/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<div class="home">
		@section ('home')
			<p> <a href="/"> Home Page </a> </p>
		@show
	</div>
	<div class="content">
		@yield('content')
	</div>
	
</body>

</html>