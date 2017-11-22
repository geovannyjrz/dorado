@extends('layouts.master')

@section('content')

<div class="mdl-grid">


	<div class="mdl-cell mdl-cell--3-col">
		<form action="#">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Clave</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Nombre</label>
			</div>
		</form>
	</div>

	<div class="mdl-cell mdl-cell--9-col">
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
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