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
    <article class="col-12 col-md-4 col-lg-4">
        <div class="card bg-light text-black">
            <a href="#"><img src="images/producto1.jpg" class="card-img" alt="Producto1"></a>
            SOFICOR <br> $22.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto2.jpg" class="card-img" alt="Producto2"></a>
            JACINTA <br> $28.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto3.jpg" class="card-img" alt="Producto3"></a>
            FRIDA <br> $29.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto4.jpg" class="card-img" alt="Producto4"></a>
            ARMANI <br> $32.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto5.jpg" class="card-img" alt="Producto5"></a>
            GRECIA <br> $21.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto6.jpg" class="card-img" alt="Producto6"></a>
            PORTOFINO <br> $32.000
        </div>
    </article>
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto7.jpg" class="card-img" alt="Producto6"></a>
            SARAVIA <br> $27.000
        </div>
    </article>  
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto8.jpg" class="card-img" alt="Producto6"></a>
            RUFINO <br> $25.000
        </div>
    </article>  
    <article class="col-12 col-md-4 col-lg-4">  
        <div class="card bg-light text-black">
            <a href=""><img src="images/producto9.jpg" class="card-img" alt="Producto6"></a>
            TIFANY <br> $33.000
        </div>
    </article>
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