<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
    public function show($id)
    {
        return Product::find($id);
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->only('title', 'image'));
        return response($product, Response::HTTP_ACCEPTED);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));
        return response($request, Response::HTTP_CREATED);
    }
}
