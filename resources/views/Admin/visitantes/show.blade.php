@extends('layouts.generic')
@section('content')
<section>
	<h2>Detalles de registro</h2>
	<div class="table-wrapper">
		<table>
			<tbody>
				<tr>
					<td><strong>ID del Registro : </strong> <br>{{ $visitante->id }}</td>
				</tr>
				<tr>
					<td><strong>Puesto : </strong> <br>{{ $visitante->user->puesto->nombre }}</td>
				</tr>
				<tr>
					<td><strong>No. Documento : </strong> <br>{{ $visitante->documento }}</td>
				</tr>
				<tr>
					<td><strong>Nombre : </strong> <br>{{ $visitante->nombre.' '.$visitante->apellido }}</td>
				</tr>
				<tr>
					<td><strong>Fecha : </strong> <br>{{ date("d/m/Y", strtotime($visitante->fecha)) }}</td>
				</tr>
				<tr>
					<td><strong>Hora Entrada : </strong> <br>{{ $visitante->entrada }}</td>
				</tr>
				<tr>
					<td><strong>Hora Salida : </strong> <br>{{ $visitante->salida }}</td>
				</tr>
				<tr>
					<td><strong>Estado : </strong> <br> {{ $visitante->estado }}</td>
				</tr>
				<tr>
					<td><strong>Detalles : </strong> <br> {{ $visitante->detalles }}</td>
				</tr>
				<tr>
					<td><strong>Registrado por : </strong> <br> {{ $visitante->user->nombre.' '.$visitante->user->apellido }}</td>
				</tr>
				<tr>
					<td><strong>Created at : </strong> <br> {{ $visitante->created_at }}</td>
				</tr>
				<tr>
					<td><strong>Updated at : </strong> <br> {{ $visitante->updated_at }}</td>
				</tr>
			</tbody>	
		</table>
		<section>
			<ul class="actions">
				<li><a href="{{ URL::previous() }}" class="button special">Regresar</a></li>
				<li><a href="#" class="button special" title = "En construccion">Guardar Registro</a></li>
			</ul>
		</section>
	</div>
</section>
@endsection
