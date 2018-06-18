@extends('layouts.template')
@section('content')
<section>
    <h2>Registro de Usuario</h2>
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" id="nombre" value="" placeholder="Nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}"  autofocus />
                @if ($errors->has('nombre'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u 12u$(xsmall)">
                <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" class="form-control{{ $errors->has('Apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" autofocus />
                @if ($errors->has('apellido'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="text" id="direccion" placeholder="Dirección" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" autofocus />
                @if ($errors->has('direccion'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u 12u$(xsmall)">
                <input type="text" id="telefono" placeholder="Teléfono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" autofocus />
                @if ($errors->has('telefono'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="email" name="email" id="email" value="" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  />
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="email" id="email-confirm" value="" placeholder="Confirmar Email"  name="email_confirmation"  />
            </div>
        </div>
        <div class="row uniform">
            <div class="6u 12u$(xsmall)">
                <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  />
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u$ 12u$(xsmall)">
                <input type="password" id="password-confirm" value="" placeholder="Confirmar Contraseña"  name="password_confirmation"  />
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

