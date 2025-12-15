<?php

namespace App\Http\Controllers;

use App\Models\ContcatUs;
use App\Http\Requests\StoreContcatUsRequest;
use App\Http\Requests\UpdateContcatUsRequest;

class ContcatUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.contact');
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
    public function store(StoreContcatUsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContcatUs $contcatUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContcatUs $contcatUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContcatUsRequest $request, ContcatUs $contcatUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContcatUs $contcatUs)
    {
        //
    }
}
