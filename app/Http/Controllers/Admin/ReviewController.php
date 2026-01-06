<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.admin_review', compact ('reviews'));
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
    public function store(StoreReviewRequest $request)
    {
        Review::create([
        'name'   => $request->name,
        'review' => $request->review,
        'rating' => $request->rating,
    ]);

    return redirect()
        ->back()
        ->with('success', 'Review submitted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update([
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.review.index')
            ->with('success', 'Review updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
       $review->delete();

    return redirect()->route('admin.review.index')
        ->with('success', 'Review deleted successfully!');
    }
}
