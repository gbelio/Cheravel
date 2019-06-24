@extends('layouts.app')
@section('content')
<div class="login">
    <div class="col-xs-12 col-md-12 col-lg-12 formulario login">
      <form class="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <h2 class="sesion">Crear Cuenta</h2>
        <br>
        <div class="form-groups">
            <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{--<br>
            <input id="surname" type="text" placeholder="Apellido" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <br>
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            {{-- <div class="custom-file">
                <input type="file" class="" id="avatar" name="avatar" value="">
            </div> 
            <br><br>--}}
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <input id="password-confirm" type="password" placeholder="Re password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <br>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary1 col-xs-6 BotonLogIn-Registro">{{ __('Register') }}</button>
          <button type="reset" class="btn btn-primary1 col-xs-6 BotonLogIn-Registro">Limpiar</button>
        </div>
      </form>
    </div>
  </div>
@endsection