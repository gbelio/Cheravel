@extends('layouts.app')
@section('content')
<div class="col-5 offset-1">
    <h3 class="">Editar Productos:</h3>
    <h2>{{ $product->name }}</h2>
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
            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Descripción">Descripción</label>
            <input type="text" name="description" value="{{ $product->description }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="text" name="amount" value="{{ $product->amount }}" class="form-control">
        </div>
        
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="" id="photopath" name="photopath" value="{{ $product->photopath }}">
            </div>
        </div>
        <div class="form-group">
            <label for="Valoración">Valoración</label>
            <select class="form-control" name="ranking">
                <option value="{{ $product->ranking }}" selected>{{ $product->ranking }}</option>
            @for ($i = 1; $i <= 5; $i++)
                @if ($product->ranking != $i)
                    <option value="{{ $i }}">{{$i}}</option>
                @endif
            @endfor
        </select>
        </div>
        <div class="form-group">
            <label for="Categoría">Categoría</label>
            <select class="form-control" name="category_id">
                <option value="{{ $product->category->id }}" selected>{{ $product->category->description }}</option>
                @foreach ($categories as $category)
                    @if ($category->id != $product->category->id)
                        <option value="{{ $category->id }}">{{ $category->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Confirmar Cambios">
        </div>
    </form>
</div>
@endsection