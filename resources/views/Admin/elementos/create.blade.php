@extends('layouts.generic')
@section('content')
<section>
	<h2>Nuevo Registro de Elemento</h2>
	{!! Form::open(['route' => 'elementos.store', 'method' => 'POST']) !!}
                        
        @include('Admin.elementos.partials.form')

    {!! Form::close() !!}
</section>
@endsection