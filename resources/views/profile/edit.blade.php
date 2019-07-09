@extends('layouts.app')
@section('content')
<section class="col-lg-12 row">
    <article class="col-lg-7 ">
        <div class='avatar' style='background-image: url(/storage/{{$user->avatar}}')></div>
    </article>
    <article class="col-lg-5">
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
                <label for="Descripción">Apellido</label>
                <input type="text" name="surname" value="{{ $user->surname }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="Precio">Email</label>
                <label type="email" name="email" value="" class="form-control">{{ $user->email }}</label>
            </div>
            <label for="Descripción">Avatar</label>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="" id="photopath" name="avatar" value="{{ $user->avatar }}">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Confirmar Cambios">
            </div>
        </form>
    </article>
</section>
@endsection