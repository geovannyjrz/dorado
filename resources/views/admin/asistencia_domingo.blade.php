@extends('layouts.master')

@section('content')

<center><h3>Registro de asistencia</h3></center>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--3-col-phone mdl-cell--middle mdl-cell--2-col-desktop mdl-cell--3-offset-desktop ">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input class="mdl-textfield__input" type="text" id="sample3">
			<label class="mdl-textfield__label" for="sample3">Clave</label>
		</div>
	</div>
	<div class="mdl-cel mdl-cell--middle mdl-cell--2-col mdl-cell--2-offset">
		<ul class="demo-list-two mdl-list">
			<li class="mdl-list__item mdl-list__item--two-line">
				<span class="mdl-list__item-primary-content">
					<i class="material-icons mdl-list__item-avatar">person</i>
					<span>Geovanny</span>
					<span class="mdl-list__item-sub-title">Sanchez Juarez</span>
				</span>
			</li>
		</ul>
	</div>

</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset">
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width: 100%;">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Id Usuario</th>
					<th class="mdl-data-table__cell--non-numeric">Nombre</th>
					<th class="mdl-data-table__cell--non-numeric">Fecha</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">1</td>
					<td class="mdl-data-table__cell--non-numeric">Merari Jafet L. Acero</td>
					<td class="mdl-data-table__cell--non-numeric">27-11-2017</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">2</td>
					<td class="mdl-data-table__cell--non-numeric">Merari Jafet L. Acero</td>
					<td class="mdl-data-table__cell--non-numeric">27-11-2017</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">3</td>
					<td class="mdl-data-table__cell--non-numeric">Geovanny Juarez</td>
					<td class="mdl-data-table__cell--non-numeric">27-11-2017</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection