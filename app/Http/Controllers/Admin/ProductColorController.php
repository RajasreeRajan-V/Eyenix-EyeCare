<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductColor;
use App\Http\Requests\StoreProductColorRequest;
use App\Http\Requests\UpdateProductColorRequest;

class ProductColorController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = ProductColor::all();
        return view('admin.admin_product_color', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductColorRequest $request)
    {
        ProductColor::create($request->validated());
        return redirect()->route('admin.ProductColor.index')->with('success', 'Product Color created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductColor $productColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductColor $productColor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductColorRequest $request, $id)
    {
        $color = ProductColor::findOrFail($id);
        $color->update($request->validated());

        return redirect()
            ->route('admin.ProductColor.index')
            ->with('success', 'Product Color updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productColor = ProductColor::findOrFail($id);
        $productColor->delete();
        return redirect()->route('admin.ProductColor.index')->with('success', 'Product Color deleted successfully.');
    }
}
