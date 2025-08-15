@extends('layouts.main')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slider1.png') }}" class="d-block w-100" alt="slider - 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider2.png') }}" class="d-block w-100" alt="slider - 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider3.png') }}" class="d-block w-100" alt="slider - 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider4.png') }}" class="d-block w-100" alt="slider - 4">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- production section --}}

    <section class="my-5">
        <div class="container">
            <h1 class="mb-3">Top Deals</h1>
            <div class="row theme-product">

                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center">Campus Shoes</h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center">Apple Watch</h6>
                            <h4 class="card-title text-center">₹ 14,99.00</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/3.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center">Nick cap </h6>
                            <h5 class="card-title text-center">₹ 7,99.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/products/4.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title text-center">Chair</h6>
                            <h5 class="card-title text-center">₹ 14,99.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
