<?php

namespace App\Http\Controllers\Admin;

use App\Models\EyeCamp;
use App\Http\Requests\StoreEyeCampRequest;
use App\Http\Requests\UpdateEyeCampRequest;
use Illuminate\Support\Facades\Storage;

class EyeCampController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eyeCamps = EyeCamp::all();
      return view('admin.admin_eyecamp', compact('eyeCamps'));
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
    public function update(UpdateEyeCampRequest $request, string $id)
    {
      $data = $request->validated();

      $eyeCamp = EyeCamp::findOrFail($id);
      if ($request->hasFile('image')) {

        if ($eyeCamp->image && Storage::disk('public')->exists($eyeCamp->image)) {
            Storage::disk('public')->delete($eyeCamp->image);
        }

        $data['image'] = $request->file('image')
                                ->store('eye-camps', 'public');
    } else {

        unset($data['image']);
    }
    $eyeCamp->update($data);
     return redirect()
            ->back()
            ->with('success', 'Eye Camp updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eyecamp = EyeCamp::findOrFail($id);
        $eyecamp ->delete();
        return redirect()
            ->back()
            ->with('success', 'Eye Camp delete successfully');
    }
}
