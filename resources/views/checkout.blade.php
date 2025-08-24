@extends('layouts.main')

@push('title')
    <title>Checkout</title>
@endpush

@section('content')
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i><i class="fa-solid fa-cart-shopping"></i> Checkout</h1>
    </div>
    {{-- Billing Information --}}
    <section>
        <div class="container my-5 bg-light p-5">
            <h2>Billing Details</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <div class="row my-3">
                            <div class="col-lg-12 mb-3">
                                <select class="form-select form-control form-control-lg" aria-label="Default select example">
                                    <option selected>Select Your Country</option>
                                    <option value="1">India </option>
                                    <option value="2">Nepal</option>
                                    <option value="3">Australia</option>
                                    <option value="3">UK</option>
                                    <option value="3">USA</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="First Name">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="Last Name">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="Your Phone">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="Your Email">
                            </div>


                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="Landmark">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <select class="form-select form-control  " aria-label="Default select example">
                                    <option selected>Select Your City</option>
                                    <option value="1">Delhi </option>
                                    <option value="2">Mumbai</option>
                                    <option value="3">Chennai</option>
                                    <option value="3">Kolkata</option>
                                    <option value="3">Bangalore</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <input type="email" class="form-control  " placeholder="State">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <select class="form-select form-control  " aria-label="Default select example">
                                    <option selected>Select Your State</option>
                                    <option value="1">Delhi </option>
                                    <option value="2">Mumbai</option>
                                    <option value="3">Chennai</option>
                                    <option value="3">Kolkata</option>
                                    <option value="3">Bangalore</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <textarea class="form-control  " placeholder="Your Address" rows="4"></textarea>
                            </div>

                            {{-- <div>
                                <a class="btn theme-orange-btn text-light rounded-pill ">Post a Comment <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div> --}}

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- You Order  --}}
    <section>
        <div class="container">
            <h3>Your Order</h3>
            <div class="row my-5">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <h4>Product</h4>
                                </th>
                                <th scope="col">
                                    <h4>Price</h4>
                                </th>
                                <th scope="col">
                                    <h4>Quantity</h4>
                                </th>
                                <th scope="col">
                                    <h4>Sub total</h4>
                                </th>
                                <th scope="col">
                                    <h4>Remove</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/9.jpg') }} " style="width:70px;"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h5>Handbag</h5>
                                        </div>
                                    </div>
                                </th>
                                <td> ₹ 4,99.00</td>
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <div class="p-1">
                                            <h6>Quantity</h6>
                                        </div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">01</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td> ₹ 14,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/2.jpg') }} " style="width:70px;"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h5>Waching</h5>
                                        </div>
                                    </div>
                                </th>
                                <td> ₹ 14,99.00</td>
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <div class="p-1">
                                            <h6>Quantity</h6>
                                        </div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">02</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td> ₹ 4,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/5.jpg') }} " style="width:70px;"
                                                class="rounded-3">
                                        </div>
                                        <div class="p-3">
                                            <h5>Camera</h5>
                                        </div>
                                    </div>
                                </th>
                                <td> ₹ 4,99.00</td>
                                <td>
                                    <div class="d-flex flex-row mb-3">
                                        {{-- <div class="p-1">
                                            <h6>Quantity</h6>
                                        </div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">03</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>
                                        </div>
                                    </div>
                                </td>
                                <td> ₹ 4,99.00</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>

                            <tr>
                                <th colspan="3">
                                    <h5>Total</h5>
                                </th>
                                <th>
                                    <h5>₹ 799.00</h5>
                                </th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- payment  --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-check">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label for="form-check-label" for="flexRadioDefault1">
                            <h5>UPI</h5>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <h5>Creadit/Debit Card</h5>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            <h5>Cash on Delivery</h5>
                        </label>
                    </div>

                    <div>
                        <a class="btn theme-orange-btn text-light rounded-pill my-3">Place Order <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
