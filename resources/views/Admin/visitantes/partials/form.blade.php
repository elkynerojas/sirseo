<div class="row uniform">
	<div class="4u 12u$(xsmall)">
		{{ Form::label('fecha', 'Fecha') }}
    	{{ Form::date('fecha', null, ['placeholder' => 'Fecha', 'id' => 'fecha']) }}
	</div>
	<div class="4u 12u$(xsmall)">
		{{ Form::label('entrada', 'Entrada') }}
    	{{ Form::time('entrada', null, ['placeholder' => 'Hora Entrada', 'id' => 'entrada']) }}
	</div>
	<div class="4u 12u$(xsmall)">
		{{ Form::label('salida', 'Salida') }}
    	{{ Form::time('salida', null, ['placeholder' => 'Hora Salida', 'id' => 'salida']) }}
	</div>
</div>

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('nombre', 'Nombre') }}
    	{{ Form::text('nombre', null, ['placeholder' => 'Nombre', 'id' => 'nombre']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('apellido', 'Apellido') }}
    	{{ Form::text('apellido', null, ['placeholder' => 'Apellido', 'id' => 'apellido']) }}
	</div>
</div>

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('documento', 'Documento') }}
    	{{ Form::text('documento', null, ['placeholder' => 'Documento', 'id' => 'documento']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('estado', 'estado') }}
    	{{ Form::text('estado', null, ['placeholder' => 'estado', 'id' => 'estado']) }}
	</div>
</div>

<div class="row uniform">
	<div class="12u 12u$(xsmall)">
		{{ Form::label('detalles', 'Detalles') }}
    	{{ Form::textarea('detalles', null, ['placeholder' => 'Detalles', 'id' => 'detalles']) }}
    	{{ Form::hidden('user_id', $user->id),['id' =>'user_id'] }}
	</div>
</div>

<div class="12u$">
	<ul class="actions">
		<li>{{ Form::submit('Guardar',['class' => 'special']) }}</li>
	</ul>
</div>

@section('scripts')
{{-- Código javascript --}}
@endsection
