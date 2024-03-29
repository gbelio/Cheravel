@extends('layouts.app')
@section('content')
<br><br>
<h1>Carrito de compras:</h1>
<section class="col-12 col-md-12 col-lg-12 row productos">
    @foreach ($cart as $item)
        @if($item->user->id == Auth::user()->id)
        <article class="col-12 col-md-4 col-lg-4">
            <div class="card bg-light text-black">
            <a href="/products/specs/{{$item->product->id}}"><img src="/storage/{{$item->product->photopath}}" class="card-img" alt="{{$item->product->name}}"></a> {{$item->product->name}} <br> ${{$item->product->amount}}
                @if(Auth::check())
                    <a href="{{url("cart/remove/$item->id")}}">QUITAR DEL CARRITO</a>
                @endif
            </div>
        </article>
        @endif
    @endforeach
</section>
@endsection