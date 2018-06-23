
@extends('layouts.generic')
@section('content')
<section>
	<h2>Puesto </h2>
	<h3>Registros de Visitantes</h3>

	<section>
		<ul class="actions fit small">
			<li><a href="{{ route('home') }}" class="button special fit small">Regresar al Inicio</a></li>
			<li><a href="{{ route('visitantes.create') }}" class="button special fit small">Nuevo Visitante</a></li>
		</ul>
	</section>
	{{ $visitantes->render() }}
	<div class="table-wrapper">
		@include('layouts.alerts')
		<table class="alt">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Nombre</th>
					<th>Entrada</th>
					<th>Salida</th>
					<th>Estado</th>
					<th>Registrado por</th>
					<th>Acciones</th>
					{{-- <th colspan="3">Acciones</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($visitantes as $visitante)
				<tr>
					<td>{{ $visitante->fecha }}</td>
					<td>{{ $visitante->nombre.' '.$visitante->apellido }}</td>
					<td>{{ $visitante->entrada }}</td>
					<td>{{ $visitante->salida }}</td>
					<td>{{ $visitante->estado }}</td>
					<td></td>
					<td>
						<a href="{{ route('visitantes.show',$visitante->id) }}"><input type="button" name="" value="Ver" class="button special small"></a>

						<a href="{{ route('visitantes.edit',$visitante->id) }}"><input type="button" name="" value="Editar" class="button special small"></a>	

						<a href="#"><input type="button" name="" value="Eliminar" class="button special small" onclick="$('#Frm-destroy').submit()">
						</a>	
					</td>
				</tr>
				{!! Form::open(['route' => ['visitantes.destroy', $visitante->id], 'method' => 'DELETE', 'id' =>'Frm-destroy']) !!}
                {!! Form::close() !!}
				@endforeach
			</tbody>
		</table>
	</div>

</section>

@endsection





