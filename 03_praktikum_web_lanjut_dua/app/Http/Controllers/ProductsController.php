<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $data_products=Product::all();
        return view('products', compact(('data_products')));
    }
}
