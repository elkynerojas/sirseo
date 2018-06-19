@extends('layouts.template')
@section('content')
<section>
	<h2>Nuevo Registro en Minuta</h2>
	<form method="post" action="{{ route('minuta.store') }}">
		@csrf
		<div class="row uniform">
			<div class="6u 12u$(xsmall)">
				<label for = "fecha">Fecha</label>
				<input type="date" name="fecha" id="fecha" value="" placeholder="Fecha" />
			</div>
			<div class="6u$ 12u$(xsmall)">
				<label for = "hora">Hora</label>
				<input type="time" name="hora" id="hora" value="" placeholder="Hora" />
			</div>
			<div class="12u$">
				<div class="select-wrapper">
					<select name="asunto" id="asunto">
						<option value="">- Asunto -</option>
						<option value="Ingreso">Ingreso</option>
						<option value="Salida">Salida</option>
						<option value="Novedad">Novedad</option>
						<option value="Consigna">Consigna</option>
						<option value="Comunicado">Comunicado</option>
						<option value="Recibo">Recibo</option>
						<option value="Entrego">Entrego</option>
						<option value="Reporte">Reporte</option>
					</select>
				</div>
			</div>
			
			<div class="12u$">
				<textarea name="anotacion" id="anotacion" placeholder="Anotaciones" rows="6"></textarea>
			</div>
			<input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
			<div class="12u$">
				<ul class="actions">
					<li><input type="submit" value="Registrar" class="special" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
		</div>
	</form>
</section>
@endsection