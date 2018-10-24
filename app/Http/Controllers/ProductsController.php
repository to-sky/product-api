<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
