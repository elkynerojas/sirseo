
@extends('layouts.generic')
@section('content')
<section>
	@if(count($elementos)>0)
	<h2>{{ $elementos[0]->puesto->nombre }}</h2>
	<h3>Registros de Elementos</h3>

	<section>
		<ul class="actions fit small">
			<li><a href="{{ route('home') }}" class="button special fit small">Regresar al Inicio</a></li>
			<li><a href="{{ route('elementos.create') }}" class="button special fit small">Nuevo Registro</a></li>
		</ul>
	</section>
	{{ $elementos->render() }}
	<div class="table-wrapper">
		@include('layouts.alerts')
		<table class="alt">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>No.Documento</th>
					<th>Tipo Elemento</th>
					<th>Marca</th>
					<th>Fecha Entrada</th>
					<th>Hora Entrada</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($elementos as $elemento)
				<tr>
					<td>{{ $elemento->id }}</td>
					<td>{{ $elemento->nombre.' '.$elemento->apellido }}</td>
					<td>{{ $elemento->documento }}</td>
					<td>{{ $elemento->tipo_elemento->nombre }}</td>
					<td>{{ $elemento->marca }}</td>
					<td>{{ date("d/m/Y", strtotime($elemento->fecha_entrada)) }}</td>
					<td>{{ $elemento->hora_entrada }}</td>
					<td>{{ $elemento->estado }}</td>
					<td>
						@if($elemento->estado == 'IN')
						<a href="javascript:salida({{ $elemento->id }})"><input type="button" name="" value="Salida" class="button special small">
						</a>
						@endif
						<a href="{{ route('elementos.show',$elemento->id) }}"><input type="button" name="" value="Ver" class="button special small"></a>	
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! Form::open(['route' => ['salidaElemento'], 'method' => 'POST', 'id' =>'Frm-salida']) !!}
			{{ Form::hidden('id',null,['id' => 'id']) }}
		{!! Form::close() !!}
	</div>
	@else
	<hr>
	<h1>Lista de registros vacía</h1>
	<hr>
	<section>
		<ul class="actions">
			<li><a href="{{ route('home') }}" class="button special">Regresar</a></li>
			<li><a href="{{ route('elementos.create') }}" class="button special">Nuevo Registro</a></li>
		</ul>
	</section>
	@endif
</section>
<script>
 	function salida(id){
 		$('#id').val(id);
 		$('#Frm-salida').submit();
 	}
</script>
@endsection




