<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function listAll()
    {
        return Product::all();
    }
    public function show($id)
    {
        return Product::find($id);
    }
}
