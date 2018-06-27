@extends('layouts.generic')
@section('content')
<section>
	<h2>Nuevo Registro en Minuta</h2>
	{!! Form::open(['route' => 'minuta.store', 'method' => 'POST']) !!}
                        
        @include('Admin.minuta.partials.form')

    {!! Form::close() !!}
</section>
@endsection