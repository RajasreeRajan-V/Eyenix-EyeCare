<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
class BrandController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.admin_brand', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Brand::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // dd('here');
        $data= $request->validated();
        // Brand::create($request->validated());
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('brands', 'public');
            $data['img'] = $path;
        }
        Brand::create($data);
        return redirect()->route('admin.brand.index')->with('success', 'Brand created successfully.');
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
    public function update(UpdateBrandRequest $request, string $id)
    {
        $data= $request->validated();
        $brand = Brand::findOrFail($id);
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('brands', 'public');
            $data['img'] = $path;
        }
        $brand->update($data);
        return redirect()->route('admin.brand.index')->with('success', 'Brand updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()
        ->route('admin.brand.index')
        ->with('success', 'Brand deleted successfully');
    }
}
