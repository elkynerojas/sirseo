@extends('layouts.generic')
@section('content')
<section>
	<h2>Edición de Registro de un Elemento</h2>
	@include('layouts.alerts')
	{!! Form::model($elemento, ['route' => ['elementos.update', $elemento->id], 'method' => 'PUT', 'files' => true]) !!}
        
        @include('Admin.elementos.partials.form')

    {!! Form::close() !!}
</section>
@endsection
