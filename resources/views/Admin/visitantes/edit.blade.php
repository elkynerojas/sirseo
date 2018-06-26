@extends('layouts.generic')
@section('content')
<section>
	<h2>Edición de Registro en Minuta</h2>
	@include('layouts.alerts')
	{!! Form::model($visitante, ['route' => ['visitantes.update', $visitante->id], 'method' => 'PUT', 'files' => true]) !!}
        
        @include('Admin.visitantes.partials.form')

    {!! Form::close() !!}
</section>
@endsection
