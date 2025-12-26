<?php

namespace App\Http\Controllers\Admin;

use App\Models\LensSolution;
use App\Http\Requests\StoreLensSolutionRequest;
use App\Http\Requests\UpdateLensSolutionRequest;
use App\Models\ContactLens;

class LensSolutionController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactLenses = ContactLens::all();
        $solutions = LensSolution::with('contactLens')->get();
       return view('admin.admin_solutions',compact('solutions', 'contactLenses'));
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
    public function store(StoreLensSolutionRequest $request)
    {
      $data = $request->validated();
       if ($request->hasFile('img')) {
        $data['img'] = $request->file('img')->store('lens-solutions', 'public');
    }
    LensSolution::create($data);

    return redirect()->back()->with('success', 'Lens Solution created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(LensSolution $lensSolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LensSolution $lensSolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLensSolutionRequest $request, string $id)
    {
        $data = $request->validated();
        $solution = LensSolution::findOrFail($id);
         if ($request->hasFile('img')) {
            $path = $request->file('img')->store('lens-solutions', 'public');
            $data['img'] = $path;
        }
        $solution->update($data);
        return redirect()->route('admin.solution.index')->with('success', 'Solution  updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $solution = LensSolution::findOrFail($id);
        $solution->delete();
        return redirect()->route('admin.solution.index')->with('success', 'Deleted successfully.');
    }
}
