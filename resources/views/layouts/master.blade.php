<!DOCTYPE html>
<html lang="es" ng-app>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>IEMP Dorado</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.js"></script>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--no-drawer-button">
		<header class="mdl-layout__header">
			@include('layouts.navbar')
		</header>
		<main class="mdl-layout__content">
			<div class="page-content">
				@yield('content')
			</div>
		</main>
		<footer></footer>
	</div>
</body>
</html>