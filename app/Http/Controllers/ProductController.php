<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = $request->input('perPage', 10);

        $products = Product::paginate($perPage, ['*'], 'page', $page);
        return response()->json([
            'success'   => true,
            'data'      => $products->items(),
            'meta'      => [
                'current_page'  => $products->currentPage(),
                'last_page'  => $products->lastPage(),
                'per_page'  => $products->perPage(),
                'total'  => $products->total(),
            ]
        ]);
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        return response()->json(['data' => $product], 201);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(['data' => $product]);
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        return response()->json(['data' => $product]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
