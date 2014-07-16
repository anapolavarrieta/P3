<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield ('title', 'Developer´s Best Friend')</title>
	<meta charset="utf-8">
</head>

<body>

	@yield('content')
	@section ('home')
		<p> <a href="/"> Home Page </a> </p>
	@show
</body>

</html>