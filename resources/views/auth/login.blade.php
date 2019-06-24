@extends('layouts.app')
@section('content')
<div class="login">
    <div class="col-xs-12 col-md-12 col-lg-12 formulario login">
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="sesion">Iniciar Sesión</h2>
            <br>
            <div class="form-groups">
                <input id="email" type="email" placeholder="Ingrese su email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <input id="password" type="password" placeholder="Ingrese su password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-check">
                <br>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>  
            </div>
            <button type="submit" class="btn btn-primary1 BotonLogIn-Registro">Ingresar</button>
            <br><br>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </form>
    </div>
  </div>
  @endsection