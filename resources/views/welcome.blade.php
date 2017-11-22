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

	</div>

</div>

@endsection