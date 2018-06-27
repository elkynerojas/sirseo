{{-- {{ date_default_timezone_set('America/Bogota') }} --}}

<div class="row uniform">
	<div class="6u 12u$(xsmall)">
		{{ Form::label('fecha', 'Fecha') }}
    	{{ Form::date('fecha', now(), ['placeholder' => 'Fecha', 'id' => 'fecha','readonly' => 'true']) }}
	</div>
	<div class="6u 12u$(xsmall)">
		{{ Form::label('hora', 'Hora') }}
    	{{ Form::time('hora', now(), ['placeholder' => 'Hora', 'id' => 'hora','readonly' => 'true']) }}
	</div>
</div>

<div class="row uniform">
	<div class="12u 12u$(xsmall)">
		{{ Form::label('asunto', 'Asunto') }}
    	{{ Form::text('asunto', null, ['placeholder' => 'Asunto', 'id' => 'asunto']) }}
	</div>
</div>

<div class="row uniform">
	<div class="12u 12u$(xsmall)">
		{{ Form::label('extracto', 'Extracto') }}
    	{{ Form::textarea('extracto', null, ['placeholder' => 'Extracto', 'id' => 'extracto']) }}
	</div>
</div>

<div class="row uniform">
	<div class="12u 12u$(xsmall)">
		{{ Form::label('anotacion', 'Anotación') }}
    	{{ Form::textarea('anotacion', null, ['placeholder' => 'Anotación', 'id' => 'anotacion']) }}
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
