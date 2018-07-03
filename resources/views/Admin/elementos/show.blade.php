@extends('layouts.generic')
@section('content')
<section>
	<h2>Detalles de registro</h2>
	<div class="table-wrapper">
		<table>
			<tbody>
				<tr>
					<td><strong>ID del Registro : </strong> <br>{{ $elemento->id }}</td>
				</tr>
				<tr>
					<td><strong>Puesto : </strong> <br>{{ $elemento->user->puesto->nombre }}</td>
				</tr>
				<tr>
					<td><strong>Nombre : </strong> <br>{{ $elemento->nombre }}</td>
				</tr>
				<tr>
					<td><strong>No. Documento : </strong> <br>{{ $elemento->documento }}</td>
				</tr>
				<tr>
					<td><strong>Fecha Entrada : </strong> <br>{{ date("d/m/Y", strtotime($elemento->fecha_entrada)) }}</td>
				</tr>
				<tr>
					<td><strong>Hora Entrada : </strong> <br>{{ $elemento->hora_entrada }}</td>
				</tr>
				<tr>
					<td><strong>Fecha Salida : </strong> <br>{{ date("d/m/Y", strtotime($elemento->fecha_salida)) }}</td>
				</tr>
				<tr>
					<td><strong>Hora Salida : </strong> <br>{{ $elemento->hora_salida }}</td>
				</tr>
				<tr>
					<td><strong>Tipo Elemento : </strong> <br>{{ $elemento->tipo_elemento->nombre }}</td>
				</tr>
				<tr>
					<td><strong>Tipo Propiedad : </strong> <br>{{ $elemento->tipo_propiedad }}</td>
				</tr>
				<tr>
					<td><strong>Marca : </strong> <br>{{ $elemento->marca }}</td>
				</tr>
				<tr>
					<td><strong>Serial : </strong> <br>{{ $elemento->serial }}</td>
				</tr>
				<tr>
					<td><strong>Estado : </strong> <br> {{ $elemento->estado }}</td>
				</tr>
				<tr>
					<td><strong>Detalles : </strong> <br> {{ $elemento->detalles }}</td>
				</tr>
				<tr>
					<td><strong>Registrado por : </strong> <br> {{ $elemento->user->nombre.' '.$elemento->user->apellido }}</td>
				</tr>
				<tr>
					<td><strong>Created at : </strong> <br> {{ $elemento->created_at }}</td>
				</tr>
				<tr>
					<td><strong>Updated at : </strong> <br> {{ $elemento->updated_at }}</td>
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
