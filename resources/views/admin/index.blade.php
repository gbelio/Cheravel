@extends('layouts.app')
@section('content')
<a class="btn btn-warning" href="{{url("products/create")}}">Agregar Producto</a>
<a class="btn btn-warning" href="{{url("products/edit")}}">Editar Producto</a>
@endsection