@extends('layouts.main')

@push('title')
    <title>Sub-Category</title>
@endpush

@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-list"></i> Sub-Category</h1>
    </div>

    {{-- Products --}}
    <section>
        <div class="container">
            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ url('category/electronics/tv/details') }}"></a><img
                            src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="{{ url('category/electronics/tv/details') }}"
                                    class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#"
                                    class="text-dark text-decoration-none">Onida
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Products --}}
    <section>
        <div class="container">
            <div class="row theme-product">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Sony
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <a href="#"></a><img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top"
                            alt=""></a>
                        <div class="card-body">
                            <h6 class="card-title text-center"><a href="#"
                                    class="text-dark text-decoration-none">Onida
                                    LED</a>
                            </h6>
                            <h5 class="card-title text-center">₹ 4,99.00</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
