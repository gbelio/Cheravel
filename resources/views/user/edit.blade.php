@extends('layouts.app')
@section('content')
<div class="col-7 offset-1">
        <h3 class="">Editar Perfil:</h3>
        <h2>{{ $user->name }}</h2>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
        <form class="" action="" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="Descripción">Surname</label>
                <input type="text" name="surname" value="{{ $user->surname }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="Precio">email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>
            
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="" id="photopath" name="photopath" value="{{ $user->photopath }}">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Confirmar Cambios">
            </div>
        </form>
    </div>
@endsection