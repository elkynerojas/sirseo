@extends('layouts.generic')
@section('content')

<section>
	<h2>Detalles de registro</h2>
	<div class="table-wrapper">
		<table>
			
			<tbody>
				
				<tr>
					<td><strong>Fecha : </strong> <br>{{ $minuta->fecha }}</td>
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
				
			</tbody>
			
		</table>
	</div>

	
</section>

@endsection


