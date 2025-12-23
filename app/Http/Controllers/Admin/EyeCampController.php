<?php

namespace App\Http\Controllers\Admin;

use App\Models\EyeCamp;
use App\Http\Requests\StoreEyeCampRequest;
use App\Http\Requests\UpdateEyeCampRequest;

class EyeCampController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('admin.admin_eyecamp');
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
    public function store(StoreEyeCampRequest $request)
    {
        $eyeCamp = EyeCamp::create($request->validated());
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('eyecamp_images', 'public');
            $eyeCamp->image = $imagePath;
        }   
            $eyeCamp->save();

        return redirect()->route('admin.EyeCamp.index')->with('success', 'Eye Camp created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(EyeCamp $eyeCamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EyeCamp $eyeCamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEyeCampRequest $request, EyeCamp $eyeCamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EyeCamp $eyeCamp)
    {
        //
    }
}
