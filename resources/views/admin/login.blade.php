@extends('layouts.masteradmin')

@section('content')

<center><h3>Iniciar sesión</h3></center>

<form action="#">
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" id="user">
				<label class="mdl-textfield__label" for="sample3">Usuario</label>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="password" id="password">
				<label class="mdl-textfield__label" for="sample3">Contraseña</label>
			</div>
		</div>
	</div>
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--3-col">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
				Entrar
			</button>
		</div>
	</div>
</form>

<script>
	

</script>


@endsection