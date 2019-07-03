@extends('layouts.app')
@section('content')
<div class="login">
    <div class="col-xs-12 col-md-12 col-lg-12 formulario login">
      <form class="form" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <h2 class="sesion">Agregar Producto</h2>
        <br>
        <div class="form-groups">
            <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <input id="description" type="text" placeholder="Descripción" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <input id="amount" type="amount" placeholder="Precio" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">
            @error('amount')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <div class="custom-file">
                <input type="file" class="" id="photopath" name="photopath" value="" required>
            </div>
            <br><br>
            <div class="form-group">
                <label for="Valoración">Valoración</label>
                <select class="form-control" name="ranking">
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{$i}}</option>
                @endfor
            </select>
            </div>
            <br>

            <div class="form-group">
                <label for="Categoría">Categoría</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary1 col-xs-6 BotonLogIn-Registro">Guardar</button>
          <button type="reset" class="btn btn-primary1 col-xs-6 BotonLogIn-Registro">Limpiar</button>
        </div>
      </form>
    </div>
  </div>
@endsection