<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/stylesheet.css">
		<!-- API Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script type="text/javascript" src="/js/geral.js"></script>-->

		<title>@yield('title')</title>
	</head>
	<body>

	<?php phpversion(); ?>
		@include('partials.header')
		
		@yield('content')
		
		@include('partials.footer')
		<br><br>
	</body>
</html>