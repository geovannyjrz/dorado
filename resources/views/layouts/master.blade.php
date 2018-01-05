<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>IEMP Dorado</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/estilos2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
			<div class="mdl-layout__header-row portfolio-logo-row">
				<span class="mdl-layout__title">
					<div class="portfolio-logo"></div>
					<span class="mdl-layout__title">Iglesia Evangelica Misionera del Pacto</span>
				</span>
			</div>
			<div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
				<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
					<a class="mdl-navigation__link" href="bienvenido" id="nav-bienvenido">Bienvenido</a>
					<a class="mdl-navigation__link" href="ubicacion" id="nav-bienvenido">Ubicación</a>
					<a class="mdl-navigation__link" href="blog" id="nav-bienvenido">Blog</a>
					<a class="mdl-navigation__link" href="nosotros" id="nav-bienvenido">Nosotros</a>
				</nav>
			</div>
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