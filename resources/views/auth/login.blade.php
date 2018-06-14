@extends('layouts.template')
@section('content')
<section>
    <h2>Ingreso a SIRSEO</h2>
    <form method="post" action="{{ route('login') }}">
         @csrf
        <div class="row uniform">
            
            <div class="6u$ 12u$(xsmall)">
               <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                <input type="email" name="email" id="demo-email" value="" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="6u 12u$(xsmall)">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="12u$">
                <ul class="actions">
                    <li><input type="submit" value="Login" class="special" /></li>
                    <li><a href="{{ route('welcome') }}"><input type="button" value="Regresar" /></a></li>
                </ul>
            </div>
            <div class="12u$">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidé mi Contraseña') }}
                </a>
            </div>
        </div>
    </form>
</section>
@endsection

