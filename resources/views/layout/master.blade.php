<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Manager</title>
	<link rel="icon" type="image/ico" href="{{URL::to('contact.ico')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.css')}}">
	<style type="text/css">
		body{
			margin-top: 70px;
		}
	</style>
	@yield('styles')
</head>
<body>
	@include('layout.header')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>