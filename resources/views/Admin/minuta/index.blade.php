
@extends('layouts.generic')
@section('content')
<section>
	<h2>Puesto {{ $minuta[0]->puesto_nombre }}</h2>
	<h3>Registros en Minuta</h3>

	<section>
		<ul class="actions fit small">
			<li><a href="{{ route('home') }}" class="button special fit small">Regresar al Inicio</a></li>
			<li><a href="{{ route('minuta.create') }}" class="button special fit small">Nuevo Registro</a></li>
		</ul>
	</section>
	{{ $minuta->render() }}
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Asunto</th>
					<th>Anotación</th>
					<th>Registrado por</th>
					{{-- <th colspan="3">Acciones</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach($minuta as $registro)
				<tr>
					<td>{{ $registro->fecha }}</td>
					<td>{{ $registro->hora }}</td>
					<td>{{ $registro->asunto }}</td>
					<td>{{ $registro->anotacion }}</td>
					<td>{{ $registro->user_nombre.' '.$registro->user_apellido }}</td>
					{{-- <td colspan="3">
						<ul style= "list-style-type: none; overflow: hidden;">
							<li style = "float: left; padding: 10px "><a href="#" class="btn btn-sm btn-default">Ver</a></li>
							<li><a style = "display: inline-block;" href="#" class="btn btn-sm btn-default">Ver</a></li>
							<li><a href="#" class="btn btn-sm btn-default">Ver</a></li>
						</ul>
					</td> --}}
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</section>

@endsection




