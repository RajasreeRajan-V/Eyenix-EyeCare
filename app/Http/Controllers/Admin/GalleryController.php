<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::all();
        return view('admin.admin_gallery', compact('gallerys'));
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
    public function store(StoreGalleryRequest $request)
    {
        $data = $request->validated();
        $imagePath = $request->file('image')->store('galleries', 'public');
        $image2Path = null;
    if ($request->hasFile('image2')) {
        $image2Path = $request->file('image2')->store('galleries', 'public');
    }

        Gallery::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $imagePath,
            'image2' => $image2Path,
        ]);

        return redirect()->route('admin.AdminGallery.index')->with('success', 'Gallery item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, string $id)
    {
        $data= $request->validated();
        $gallery = Gallery::findOrFail($id);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('galleries', 'public');
            $data['image'] = $path;
        }
        if ($request->hasFile('image2')) {
            $path = $request->file('image2')->store('galleries', 'public');
            $data['image2'] = $path;
    }

        $gallery->update($data);

        return redirect()->route('admin.AdminGallery.index')->with('success', 'Gallery item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::findOrFail($id)->delete();
         return redirect()
        ->route('admin.AdminGallery.index')
        ->with('success', 'Gallery deleted successfully');
    }
}
