<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
class AboutController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::latest()->first();
        return view('admin.admin_about', compact('about'));
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
    public function store(StoreAboutRequest $request)
    {
        $data= $request->validated();
        if ($request->hasFile('shop_image')) {
            $path = $request->file('shop_image')->store('abouts', 'public');
            $data['shop_image'] = $path;
        }
        if ($request->hasFile('spectacle_image')) {
            $path = $request->file('spectacle_image')->store('abouts', 'public');
            $data['spectacle_image'] = $path;
        }
        About::create($data);
        return redirect()->route('admin.about.index')->with('success', 'About information created successfully.');
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
    public function update(UpdateAboutRequest $request, string $id)
    {
        $data= $request->validated();
        $about = About::findOrFail($id);
        if ($request->hasFile('shop_image')) {
            $path = $request->file('shop_image')->store('abouts', 'public');
            $data['shop_image'] = $path;
        }
        if ($request->hasFile('spectacle_image')) {
            $path = $request->file('spectacle_image')->store('abouts', 'public');
            $data['spectacle_image'] = $path;
        }
        $about->update($data);
        return redirect()->route('admin.about.index')->with('success', 'About information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
