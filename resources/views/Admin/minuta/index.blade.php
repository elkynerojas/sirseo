
@extends('layouts.generic')
@section('content')
<section>
	@if(count($minuta)>0)
	<h2>Puesto {{ $minuta[0]->puesto->nombre }}</h2>
	<h3>Registros en Minuta</h3>

	<section>
		<ul class="actions fit small">
			<li><a href="{{ route('home') }}" class="button special fit small">Regresar al Inicio</a></li>
			<li><a href="{{ route('minuta.create') }}" class="button special fit small">Nuevo Registro</a></li>
		</ul>
	</section>
	
	{{ $minuta->render() }}
	<div class="table-wrapper">
		@include('layouts.alerts')
		<table class="alt">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Asunto</th>
					<th>Extracto</th>
					<th>Registrado por</th>
					<th>Acciones</th>
					{{-- <th colspan="3">Acciones</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($minuta as $registro)
				<tr>
					<td>{{ date("d/m/Y", strtotime($registro->created_at)) }}</td>
					<td>{{ date_format($registro->created_at, 'G:ia') }}</td>
					<td>{{ $registro->asunto }}</td>
					<td>{{ $registro->extracto }}</td>
					<td>{{ $registro->user->nombre.' '.$registro->user->apellido }}</td>
					<td>
						<a href="{{ route('minuta.show',$registro->id) }}"><input type="button" name="" value="Ver" class="button special small"></a>
						{{-- @if($registro->user->id == $user->id )
						<a href="{{ route('minuta.edit',$registro->id) }}"><input type="button" name="" value="Editar" class="button special small"></a>	

						<a href="#"><input type="button" name="" value="Eliminar" class="button special small" onclick="$('#Frm-destroy').submit()">
						</a>
						@endif --}}	
					</td>
				</tr>
				{!! Form::open(['route' => ['minuta.destroy', $registro->id], 'method' => 'DELETE', 'id' =>'Frm-destroy']) !!}
                {!! Form::close() !!}
				@endforeach
			</tbody>
		</table>
	</div>
	@else
	<hr>
	<h1>Lista de registros vacía</h1>
	<hr>
	<section>
		<ul class="actions">
			<li><a href="{{ route('home') }}" class="button special">Regresar</a></li>
			<li><a href="{{ route('minuta.create') }}" class="button special">Nuevo Registro</a></li>
		</ul>
	</section>
	@endif
</section>

@endsection





