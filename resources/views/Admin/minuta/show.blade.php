@extends('layouts.generic')
@section('content')

<section>
	<h2>Detalles de registro</h2>
	<div class="table-wrapper">
		<table>
			<tbody>
				<tr>
					<td><strong>ID del Registro : </strong> <br>{{ $minuta->id }}</td>
				</tr>
				<tr>
					<td><strong>Puesto : </strong> <br>{{ $minuta->puesto->nombre }}</td>
				</tr>
				<tr>
					<td><strong>Fecha : </strong> <br>{{ date("d/m/Y", strtotime($minuta->fecha)) }}</td>
				</tr>
				<tr>
					<td><strong>Hora : </strong> <br>{{ $minuta->hora }}</td>
				</tr>
				<tr>
					<td><strong>Asunto : </strong> <br> {{ $minuta->asunto }}</td>
				</tr>
				<tr>
					<td><strong>Extracto : </strong> <br> {{ $minuta->extracto }}</td>
				</tr>
				<tr>
					<td><strong>Anotación : </strong> <br> {{ $minuta->anotacion }}</td>
				</tr>
				<tr>
					<td><strong>Registrado por : </strong> <br> {{ $minuta->user->nombre.' '.$minuta->user->apellido }}</td>
				</tr>
				<tr>
					<td><strong>Created at : </strong> <br> {{ $minuta->created_at }}</td>
				</tr>
				<tr>
					<td><strong>Updated at : </strong> <br> {{ $minuta->updated_at }}</td>
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


