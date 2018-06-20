@extends('layouts.generic')
@section('content')
<section>
	<h2>Edición de Registro en Minuta</h2>
	{!! Form::model($minuta, ['route' => ['minuta.update', $minuta->id], 'method' => 'PUT', 'files' => true]) !!}
        
        @include('Admin.minuta.partials.form')

    {!! Form::close() !!}
</section>
@endsection
