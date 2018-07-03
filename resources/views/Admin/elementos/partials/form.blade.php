{{-- {{ date_default_timezone_set('America/Bogota') }} --}}

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('nombre', 'Nombre') }}
    	{{ Form::text('nombre', null, ['placeholder' => 'Nombre', 'id' => 'nombre']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('documento', 'Documento') }}
    	{{ Form::text('documento', null, ['placeholder' => 'Documento', 'id' => 'documento']) }}
	</div>
</div>

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('fecha_entrada', 'Fecha Entrada') }}
    	{{ Form::date('fecha_entrada', null, ['id' => 'fecha_entrada']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('hora_entrada', 'Hora Entrada') }}
    	{{ Form::time('hora_entrada', null, ['id' => 'hora_entrada']) }}
	</div>
</div>

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('fecha_salida', 'Fecha Salida') }}
    	{{ Form::date('fecha_salida', null, ['id' => 'fecha_salida']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('hora_salida', 'Hora Salida') }}
    	{{ Form::time('hora_salida', null, ['id' => 'hora_salida']) }}
	</div>
</div>

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('tipo_elemento_id', 'Tipo de Elemento') }}
    	{{ Form::select('tipo_elemento_id', $tipos, null, ['id' => 'tipo_elemento_id']) }}
    	
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('tipo_propiedad_id', 'Tipo de Propiedad') }}
    	{{ Form::select('tipo_propiedad_id', ['INVENTARIO'=>'INVENTARIO', 'AJENO'=>'AJENO'], null, ['id' => 'tipo_propiedad_id']) }}
	</div>
	
</div>
<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('marca', 'Marca') }}
    	{{ Form::text('marca', null, ['placeholder' => 'Marca','id' => 'marca']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('serial', 'Serial') }}
    	{{ Form::text('serial', null, ['placeholder' => 'Serial','id' => 'serial']) }}
	</div>
	
</div>
<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('detalles', 'Detalles') }}
    	{{ Form::textarea('detalles', null, ['placeholder' => 'Detalles','id' => 'detalles']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('estado', 'Estado') }}
    	{{ Form::text('estado', 'IN', ['placeholder' => 'Estado','id' => 'estado','readonly' =>'true']) }}
    	{{ Form::hidden('user_id', $user->id),['id' =>'user_id'] }}
    	{{ Form::hidden('puesto_id', $user->puesto_id),['id' =>'puesto_id'] }}
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
