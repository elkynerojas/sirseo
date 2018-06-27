
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
					<th>ID</th>
					<th>Fecha</th>
					<th>No.Documento</th>
					<th>Nombre</th>
					<th>Entrada</th>
					<th>Salida</th>
					<th>Estado</th>
					{{-- <th>Registrado por</th> --}}
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($visitantes as $visitante)
				<tr>
					<td>{{ $visitante->id }}</td>
					<td>{{ date("d/m/Y", strtotime($visitante->fecha)) }}</td>
					<td>{{ $visitante->documento }}</td>
					<td>{{ $visitante->nombre.' '.$visitante->apellido }}</td>
					<td>{{ $visitante->entrada }}</td>
					<td>{{ $visitante->salida }}</td>
					<td>{{ $visitante->estado }}</td>
					{{-- <td>{{ $visitante->user->nombre.' '.$visitante->user->apellido }}</td> --}}
					<td>
						@if($visitante->estado == 'IN')
						<a href="javascript:salida({{ $visitante->id }})"><input type="button" name="" value="Salida" class="button special small">
						</a>
						@endif
						<a href="{{ route('visitantes.show',$visitante->id) }}"><input type="button" name="" value="Ver" class="button special small"></a>	
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! Form::open(['route' => ['salidaVisitante'], 'method' => 'POST', 'id' =>'Frm-salida']) !!}
			{{ Form::hidden('id',null,['id' => 'id']) }}
		{!! Form::close() !!}
	</div>

</section>
<script>
 	function salida(id){
 		$('#id').val(id);
 		$('#Frm-salida').submit();
 	}
</script>
@endsection




