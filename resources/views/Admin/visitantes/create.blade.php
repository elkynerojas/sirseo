@extends('layouts.generic')
@section('content')
<section>
	<h2>Nuevo Visitante</h2>
	{!! Form::open(['route' => 'visitantes.store', 'method' => 'POST']) !!}
                        
        @include('Admin.visitantes.partials.form')
    {!! Form::close() !!}
</section>
@endsection