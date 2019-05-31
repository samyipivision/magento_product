<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>