<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdetailsController extends Controller
{
    public function detail($slug)
    {
        return view('product-details');
    }
}
