<?php

namespace App\Http\Controllers\Admin;

use App\Models\Collection;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Brand;
use App\Models\Shape;
use App\Models\Frame;
use App\Models\ProductColor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CollectionController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        $shapes = Shape::all();
        $frames = Frame::all();
        $colors = ProductColor::all();
        $collections = Collection::with('colors')->get();
        return view('admin.admin_collection', compact(
            'brands',
            'shapes',
            'frames',
            'colors',
            'collections'
        ));
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
    public function store(StoreCollectionRequest $request)
    {
        DB::beginTransaction();
        try {
            $frontImagePath = null;
            $backImagePath  = null;
            if ($request->hasFile('front_image')) {
                $frontImagePath = $request->file('front_image')
                    ->store('collections/front', 'public');
            }

            if ($request->hasFile('back_image')) {
                $backImagePath = $request->file('back_image')
                    ->store('collections/back', 'public');
            }
            $collection = Collection::create([
                'name'        => $request->name,
                'price'       => $request->price,
                'front_image' => $frontImagePath,
                'back_image'  => $backImagePath,
                'type'        => $request->type,
                'gender'      => $request->gender,
                'brand_id'    => $request->brand_id,
                'shape_id'    => $request->shape_id,
                'frame_id'    => $request->frame_id,
                'description' => $request->description,
            ]);
            if ($request->filled('colors')) {
                $collection->colors()->attach($request->colors);
            }
            DB::commit();
            return redirect()
                ->back()
                ->with('success', 'Collection created successfully.');

    } catch (\Exception $e) {

        DB::rollBack();

        return redirect()
            ->back()    
            ->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

    

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
  
    public function update(Request $request, string $id)
    {
        $collection = Collection::findOrFail($id);
        $data = $request->validate([
            'name'        => [
                'required',
                Rule::unique('collections', 'name')->ignore($collection->id),
            ],
            'price'       => 'nullable',
            'front_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'back_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'type'        => 'nullable',
            'gender'      => 'nullable',
            'brand_id'    => 'nullable|exists:brands,id',
            'shape_id'    => 'nullable|exists:shapes,id',
            'frame_id'    => 'nullable|exists:frames,id',
            'colors'      => 'nullable|array',
            'colors.*'    => 'exists:product_colors,id',
            'description' => 'nullable',
        ]);

        foreach (['front_image', 'back_image'] as $imageField) {
            if ($request->hasFile($imageField)) {

                // delete old image
                if ($collection->$imageField &&
                    Storage::disk('public')->exists($collection->$imageField)) {
                    Storage::disk('public')->delete($collection->$imageField);
                }

                // store new image
                $data[$imageField] = $request->file($imageField)
                    ->store("collections/{$imageField}", 'public');

            } else {
                // IMPORTANT: do not overwrite existing image
                unset($data[$imageField]);
            }
        }

        $collection->update($data);

        $collection->colors()->sync($request->colors ?? []);

        return redirect()->back()->with('success', 'Collection updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collection = Collection::findOrFail($id);
        $collection->delete();
        return redirect()->back()->with('success', 'Collection deleted successfully!');
    }
}
