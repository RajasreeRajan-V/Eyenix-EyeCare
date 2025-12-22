<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactLens;
use App\Http\Requests\StoreContactLensRequest;
use App\Http\Requests\UpdateContactLensRequest;

class ContactLensController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactLenses = ContactLens::all();
        return view('admin.admin_contactlens', compact('contactLenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        ContactLens::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactLensRequest $request)
    {
        $data= $request->validated();
          
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('lens', 'public');
            $data['img'] = $path;
        }
        ContactLens::create($data);

        return redirect()->route('admin.ContactLens.index')->with('success', 'Contact Lens created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactLens $contactLens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactLens $contactLens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactLensRequest $request, string $id)
    {
        $data= $request->validated();
        $contactLens = ContactLens::findOrFail($id);
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('lens', 'public');
            $data['img'] = $path;
        }

        $contactLens->update($data);

        return redirect()->route('admin.ContactLens.index')->with('success', 'Contact Lens updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contactLens = ContactLens::findOrFail($id);
        $contactLens->delete();
        return redirect()->route('admin.ContactLens.index')->with('success', 'Contact Lens deleted successfully.');
    }
}
