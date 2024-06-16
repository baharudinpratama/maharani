<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductImageRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productImages = ProductImage::with('product')->get();

        return view('product-image.index')
            ->with(['productImages' => $productImages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();

        return view('product-image.create')->with(['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductImageRequest $request)
    {
        $data = $request->all();
        $data['url'] = $request->file('url')->store(
            'assets/product', 'public'
        );
        $data['created_by'] = Auth::id();

        ProductImage::create($data);
        return redirect()->route('product-images.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = ProductImage::findOrFail($id);
        $product->update(['deleted_by' => Auth::id()]);
        $product->delete();

        return redirect()->route('product-images.index');
    }
}
