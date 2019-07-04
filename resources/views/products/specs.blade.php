@extends('layouts.app')
@section('content')
<div class="col-7 offset-1">
    <h3 class="">Detalle</h3>
    <label for="Categoría">Nombre</label>
    <h2>{{ $product->name }}</h2>
    <label for="Categoría">Descripción</label>
    <h2>{{ $product->description }}</h2>
    <label for="Categoría">Precio</label>
    <h2>{{ $product->amount }}</h2>
    <label for="Categoría">Valoración</label>
    <h2>{{ $product->ranking }}</h2>
    <label for="Categoría">Categoría</label>
    <h2>{{ $product->category->description }}</h2>
    <img src="/storage/{{$product->photopath}}" class="card-img" alt="{{$product->id}}">
</div>
@endsection