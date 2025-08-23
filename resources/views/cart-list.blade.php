@extends('layouts.main')

@push('title')
    <title>Product Details</title>
@endpush

@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Cart List</h1>
    </div>
    {{-- Cart List  --}}
    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product </th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>

                                        </div>
                                        <img src="{{ asset('assets/images/products/5.jpg') }}" class="img-fluid"
                                            style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Camera</h5>
                                    </div>

                                </th>
                                <td>₹ 4,99.00</td>
                                <td>02</td>
                                <td>₹ 4,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>

                                        </div>
                                        <img src="{{ asset('assets/images/products/5.jpg') }}" class="img-fluid"
                                            style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Camera</h5>
                                    </div>

                                </th>
                                <td>₹ 4,99.00</td>
                                <td>02</td>
                                <td>₹ 4,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>

                                        </div>
                                        <img src="{{ asset('assets/images/products/5.jpg') }}" class="img-fluid"
                                            style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Camera</h5>
                                    </div>

                                </th>
                                <td>₹ 4,99.00</td>
                                <td>02</td>
                                <td>₹ 4,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
