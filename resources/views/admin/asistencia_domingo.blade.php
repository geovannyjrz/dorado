@extends('layouts.masteradmin')

@section('content')

<center><h3>Registro de asistencia</h3></center>

<div ng-controller="listaAsistencia">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--middle mdl-cell--4-col-phone  mdl-cell--2-col-desktop mdl-cell--3-offset-desktop ">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="sample3" ng-model="nuevoRegistro"
				ng-keydown="$event.keyCode === 13 && agregarRegistro()">
				<label class="mdl-textfield__label" for="sample3">Clave</label>
			</div>
		</div>
		<div class="mdl-cel mdl-cell--middle mdl-cell--4-col-phone mdl-cell--3-col-desktop mdl-cell--1-offset-desktop">
			<ul class="demo-list-two mdl-list">
				<li class="mdl-list__item mdl-list__item--two-line">
					<span class="mdl-list__item-primary-content">
						<i class="material-icons mdl-list__item-avatar">person</i>
						<span>@{{nombre}}</span>
						<span class="mdl-list__item-sub-title">@{{familia}}</span>
					</span>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--6-col-desktop mdl-cell--3-offset-desktop mdl-cell--hide-phone">
			<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="lista-asistencia">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Id</th>
						<th class="mdl-data-table__cell--non-numeric">Nombre</th>
						<th class="mdl-data-table__cell--non-numeric">Fecha</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="registro in asistencia">
						<td>@{{ registro.Id }}</td>
						<td class="mdl-data-table__cell--non-numeric">@{{ registro.Nombre }}</td>
						<td>@{{ date | date:'dd-MM-yyyy' }}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="mdl-cell mdl-cell--hide-desktop">
			<h3>Lista de asistencia</h3>
			<ul class="demo-list-item mdl-list">
				<li class="mdl-list__item" ng-repeat="registro in asistencia">
					<span class="mdl-list__item-primary-content">
						@{{ registro.Id }} - @{{ registro.Nombre }}
					</span>
				</li>
			</ul>
		</div>
	</div>


</div>

<script>
	var app = angular.module('iglesia', []);

	app.controller('listaAsistencia',	function($scope, $http){

		$scope.asistencia = [];

		$scope.date = new Date();
		
		$scope.agregarRegistro = function () {

			if ($scope.nuevoRegistro != null)
				$http({
					method : "POST",
					url : "asistencia",
					data : {
						Code: $scope.nuevoRegistro
					}
				}).then(function mySuccess(response) {

					if(response.data.validacion){

						var Id = response.data.user['Id'];
						var Nombre = response.data.user['Nombre'];
						var Familia = response.data.user['Familia'];

						$http({
							method : "POST",
							url : "reg_asistencia",
							data : {
								Id: Id
							}
						}).then(function mySuccess(response) {

							$scope.asistencia.push({Id: Id, Nombre: Nombre});
							$scope.nombre = Nombre;
							$scope.familia = "Fam: "+ Familia;
							$scope.nuevoRegistro = null;

						}, function myError(response) {
							alert("No se pudo guardar");
						});

						return false;

					}

					alert(response.data.mensaje);

				}, function myError(response) {
					alert("Hola");
				});
			};
		});

	</script>


	@endsection