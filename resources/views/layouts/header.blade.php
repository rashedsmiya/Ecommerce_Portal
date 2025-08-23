<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    {{--  Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- google fonts --}}

    {{-- Css Link --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h1 class="text-light"><img src="{{ asset('assets/images/logo/logo.png') }}" style="width:250px;"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <form class="d-flex" role="search">
                    <input class="form-control form-control-sm" style="width: 350px" type="search"
                        placeholder="Search for Products" aria-label="Search" />
                    <button class="btn btn-light text-secondary btn-sm" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div>
                <a href="#" class="text-decoration-none text-light">Became a Seller</a>
                <a href="{{ url('cart-list/product') }}" class="btn theme-green-btn btn-sm text-light"><i
                        class="fa-solid fa-cart-shopping"></i>
                    Cart</a>
                <a href="#" class="btn theme-orange-btn btn-sm text-light"><i class="fa-solid fa-user"></i>
                    Login</a>
            </div>
        </div>
    </nav>

    {{-- Category Nav --}}
    <nav class="navbar navbar-expand-lg theme-navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{ url('category/electronics') }}">Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">Electronics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="#">Grocery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-dark" href="{{ url('category/electronics/tv') }}">Appliances</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
