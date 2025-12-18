<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Frame;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFrameRequest;
use App\Http\Requests\UpdateShapeRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\FrameType;
use App\Models\Material;

class FrameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frameTypes = FrameType::all();
        $materials = Material::all();
        $frames = Frame::with(['frameType', 'material'])->get();
        return view('admin.admin_frame', compact('frameTypes', 'materials', 'frames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Frame::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFrameRequest $request)
    {
        
        if ($request->frame_type_id === 'new') {
            $frameType = FrameType::firstOrCreate(
                ['name' => $request->new_frame_type],
                ['status' => 1]
            );
        $frameTypeId = $frameType->id;
        } 
        else {
            $frameTypeId = $request->frame_type_id;
        }
        if ($request->material_id === 'new') {
            $material = Material::firstOrCreate(
                ['name' => $request->new_material],
                ['status' => 1]
            );
            $materialId = $material->id;
        } 
        else {
            $materialId = $request->material_id;
        }
        $imagePath = $request->file('image')->store('frames', 'public');
        Frame::create([
            'name' => $request->name,
            'image' => $imagePath,
            'frame_type_id' => $frameTypeId,
            'material_id' => $materialId,
        ]);
        return redirect()->back()->with('success', 'Frame created successfully.');
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
        //
    }

    public function destroyMaterial(Material $material)
    {
        $material->delete();
        return redirect()->back()->with('success', 'Material deleted successfully.');
    }
    public function destroyFrameType(FrameType $frameType)
    {
        $frameType->delete();
        return redirect()->back()->with('success', 'Frame Type deleted successfully.');
    }
    public function updateMaterial(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:materials,name,' . $id,
        ]);

        $material = Material::findOrFail($id);
        $material->name = $request->name;
        $material->save();

        return redirect()->back()->with('success', 'Material updated successfully.');
    }
    public function updateFrameType(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:frame_types,name,' . $id,
        ]);

        $frameType = FrameType::findOrFail($id);
        $frameType->name = $request->name;
        $frameType->save();

        return redirect()->back()->with('success', 'Frame Type updated successfully.');
    }
}
