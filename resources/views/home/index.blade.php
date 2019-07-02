@extends('layouts.app')
@section('content')
<section class="__wrapper-carousel">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slide1">
                <div class="__text-combo __light">
                    <h3>Bienvenidos</h3>
                    <p>Cheramel by Santino</p>
                </div>
            </div>
            <div class="carousel-item slide2">
                <div class="__text-combo __light">
                    <h3>Bienvenidos</h3>
                    <p>Cheramel by Santino</p>
                </div>
            </div>
            <div class="carousel-item slide3">
                <div class="__text-combo __light">
                    <h3>Bienvenidos</h3>
                    <p>Cheramel by Santino</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
</section>
<div class= cajadetexto>
    <h3 class="col-12 text-center col-sm-6 col-lg-3 destacados">PRODUCTOS DESTACADOS</h3>
</div>

<section class="col-12 col-md-12 col-lg-12 row productos">
    @foreach ($products as $product)
    @if ($product->ranking > 2)
    <article class="col-12 col-md-4 col-lg-4">
        <div class="card bg-light text-black">
        <a href="#"><img src="/storage/{{$product->photopath}}" class="card-img" alt="Producto1"></a> {{$product->name}} <br>
        </div>
    </article>
    @endif
    @endforeach
</section>
<section class="col-12 col-md-12 col-lg-12 row productos">
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black elementos">
            <a href=""><img src="images/SILLONES.jpg" class="card-img" alt="Producto6"></a>
        </div>
    </article>   <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black elementos">
            <a href=""><img src="images/BUTACAS.jpg" class="card-img" alt="Producto6"></a>
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black elementos">
            <a href=""><img src="images/COJINES.jpg" class="card-img" alt="Producto6"></a>
        </div>
    </article>  
</section>
@endsection