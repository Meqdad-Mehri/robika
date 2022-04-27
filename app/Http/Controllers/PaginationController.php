<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class PaginationController extends Controller
{
    public function allProducts(){

    $products = Product::paginate(10);
    return view('products' , compact('products'));
}
}
