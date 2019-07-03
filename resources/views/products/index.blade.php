@extends('layouts.app')
@section('content')
<section class="col-12 col-md-12 col-lg-12 row productos">
    @foreach ($products as $product)
        <article class="col-12 col-md-4 col-lg-4">
            <div class="card bg-light text-black">
                <a href="#"><img src="/storage/{{$product->photopath}}" class="card-img" alt="{{$product->id}}"></a> {{$product->name}} <br>
                
            </div>
        </article>
    @endforeach
</section>
@endsection