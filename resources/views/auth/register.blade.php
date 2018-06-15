@extends('layouts.template')
@section('content')
<section>
    <h2>Registro de Usuario</h2>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" name="name" id="name" value="" placeholder="Nombre" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus />
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required />
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="password" id="password-confirm" value="" placeholder="Confirmar" class="form-control" name="password_confirmation" required />
            </div>
           
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Registro" class="special" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
    </form>
</section>
@endsection

