<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shape;
use App\Http\Requests\StoreShapeRequest;
use App\Http\Requests\UpdateShapeRequest;

// use function Psy\sh;    

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shapes = Shape::all();
        return view('admin.admin_shape', compact('shapes'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Shape::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShapeRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('shapes', 'public');
            $data['img'] = $imagePath;
        }

        Shape::create($data);

        return redirect()->back()->with('success', 'Shape created successfully.');
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
    public function update(UpdateShapeRequest $request, string $id)
    {
        $shape = Shape::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('shapes', 'public');
            $data['img'] = $imagePath;
        }

        $shape->update($data);

        return redirect()->back()->with('success', 'Shape updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shape = Shape::findOrFail($id);
        $shape->delete();

        return redirect()->back()->with('success', 'Shape deleted successfully.');  
    }
}
