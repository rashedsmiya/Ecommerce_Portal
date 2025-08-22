@extends('layouts.main')

@push('title')
    <title>Product Details</title>
@endpush

@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-layer-group"></i> Product Details</h1>
    </div>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/products/1.jpg') }}" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-8">

                    <div>
                        <h2>Wommen Shoes </h2>
                        <h5>₹ 4,99.00</h5>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <h6>2 Customer Ratings</h6>
                        </div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. </p>
                        <div>
                            <a class="btn theme-green-btn text-light rounded-pill me-1">Add to card</a>
                            <a class="btn theme-orange-btn text-light rounded-pill ">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <h4>Product Description</h4>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. </p>

                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. </p>

                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. </p>
                </div>
                {{-- Reletied Products  --}}

                <div>
                    <section>
                        <div class="container my-5">

                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h2 class="mb-3">Related Products</h2>
                                </div>
                                <div class="#">
                                    <a href="#" class="btn theme-orange-btn text-light btn-sm">View All</a>
                                </div>
                            </div>
                            <div class="row theme-product">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#"></a><img src="{{ asset('assets/images/products/5.jpg') }}"
                                            class="card-img-top" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"><a href="#"
                                                    class="text-dark text-decoration-none">Camera</a> </h6>
                                            <h5 class="card-title text-center">₹ 4,99.00</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#"> <img src="{{ asset('assets/images/products/6.jpg') }}"
                                                class="card-img-top" alt="">
                                        </a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"><a href="#"
                                                    class="text-dark text-decoration-none">Women Shoes Watch</a></h6>
                                            <h5 class="card-title text-center">₹ 14,99.00</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#"><img src="{{ asset('assets/images/products/7.jpg') }}"
                                                class="card-img-top" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"><a href="#"
                                                    class="text-dark text-decoration-none">LED TV
                                                </a></h6>
                                            <h5 class="card-title text-center">₹ 7,99.00</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#"><img src="{{ asset('assets/images/products/8.jpg') }}"
                                                class="card-img-top" alt=""></a>
                                        <div class="card-body">
                                            <h6 class="card-title text-center"><a href="#"
                                                    class="text-dark text-decoration-none">
                                                    Washing Mesing</a></h6>
                                            <h5 class="card-title text-center">₹ 14,99.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <hr>
                {{-- Reviews --}}
                <section>
                    <h2> 02 Reviews</h2>
                    <div class="row mt-4">
                        <div class="col-lg-1">
                            <img src="{{ asset('assets/images/review/user.png') }}" class="img-fluid rounded-circle"
                                alt="">
                        </div>
                        <div class="col-lg-11">
                            <div>
                                <h4>John Doe</h4>
                                <div>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h6>198 Dec, 2034</h6>
                                        </div>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star "></span>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis et culpa placeat
                                    dicta eum.s</p>
                                <div>
                                    <a class="btn theme-orange-btn text-light rounded-pill btn-sm">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-1">
                    <img src="{{ asset('assets/images/review/user.png') }}" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="col-lg-11 mt-4">
                    <div>
                        <h4>Alen Musk</h4>
                        <div>
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h6>290 Dec, 2034</h6>
                                </div>
                                <div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                </div>
                            </div>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis et culpa placeat
                            dicta eum.s</p>
                        <div>
                            <a class="btn theme-orange-btn text-light rounded-pill btn-sm">Reply</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Add a Review  --}}
    <section>
        <div class="container my-5 bg-light p-5">
            <h2>Add a Review</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <div class="form-text">Reate This Product? *
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                        </div>
                </div>
                <div class="row my-3">
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Your Email">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <textarea class="form-control form-control-lg" placeholder="Your Message" rows="4"></textarea>
                    </div>

                    <div>
                        <a class="btn theme-orange-btn text-light rounded-pill ">Post a Comment <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    </div>
    </div>
    </section>
@endsection
